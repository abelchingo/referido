<?php 
$xajax->register(XAJAX_FUNCTION,"frmsolcitudclave");
$xajax->register(XAJAX_FUNCTION,"procesarfrmrecuperaclave");

function frmsolcitudclave(){ 
    $serie="";
	$codigo="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($i=0;$i<5;$i++)
	{
		$serie=$serie.$codigo{rand(1,25)}." ";
	}
	$objResponse = new xajaxResponse();
	$frm='<div id="ventFlot" style="width:400px; margin-top:130px"><div class="icoCerrar" onclick="quitarMascara()"><img src="img/cerrar.jpg" border="0" height="20"></div><div class="titulo">Solicitar Recuperar Clave</div><div class="conten"><form name="frmRecuperaClave" id="frmRecuperaClave" method="post" action="javascript:void(null)" onSubmit="validarfrmRegistro(2)">
	<input type="hidden" name="codseg" id="codseg" value="'.ereg_replace(" ","",$serie).'"/>
	<table border="0" align="center" cellpadding="1" cellspacing="1">
	<tr><th colspan="4"></th></tr>
	<tr><td valign="bottom" height="5" colspan="4"><hr></td></tr>
 	<tr>
        <th align="left">Email</th><th>:</th>
        <td colspan="2"><input name="email" id="email" size="25" maxlength="150" class="txt" onKeyUp="validarCar(this,event);"></td>
    </tr>
    <tr>
       <th>Codigo Seguridad</th><th>:</th>
       <td><input name="seguridad" id="seguridad" size="5" maxlength="5" class="txt" onKeyUp="validarCar(this,event);"></td>
       <td valign="middle">
	   <img id="imagenSeg" ondblclick="xajax_cargarcodseg();" title="doble click para recargar la imagen" src="imagenseg.php?serie='.trim($serie).'">
	   </td>
 	</tr>
 <tr><td valign="top" height="5" colspan="4"><hr></td></tr>
 <tr><td colspan="4" align="center"><input type="submit" value="Enviar" class="btn">&nbsp;
      <input type="button" value="Cancelar" class="btn" onclick="cancelarRegistro()"></td></tr>
  </table> </form></div></div>';
    $objResponse->assign('pnlContenMascara','innerHTML',$frm);
	return $objResponse;
}

function procesarfrmrecuperaclave($form){
    $objResponse = new xajaxResponse();
	require_once("sysdatos/cls.DatUsuario.php");
	$email=$form["email"];
	$objusu=new DatUsuario;
	$contaremail=$objusu->compruebaRegistroUsuario($email);
  if($contaremail==1){
	require_once("sysdatos/cls.DatSolicitud.php");
	$objsol=new DatSolicitud;
	$email = $form['email'];
	$seguridad=$form['seguridad'];
	$enviarA = $email;
	$remitente = $email;

	if (eregi("(\r|\n)", $form["email"]) || eregi("(\r|\n)", $form["seguridad"])) {
		$objResponse->alert("Valores incorrectos");
		$objResponse->call("xajax_cargarcodseg");
	}
	else{
		require_once("sysdatos/cls.DatMensajeAdmin.php");
		$menj=new  DatMensajeAdmin;
		$datomsqj=$menj->getxPk("MSJRECUPERACLAVE"."ES");
		$asunto = $datomsqj[0]['men_asu'];
		$headers="From: Mi Referido <info@mireferido.com>\nReply-To:".$email."\nContent-Type: text/html; charset=iso-8859-1";
		$message ="<html><head>
		<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
		<style type='text/css'>
		<!--
		.Nav_01 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3B4742;}
		-->
		</style>
		</head>
		<body class= 'Nav_01'>";
		$user=ereg_replace("_user_",$email,utf8_encode($datomsqj[0]['men_conten']));
		$link=ereg_replace("_linkRecuperaClave_",'<a href="http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/recuperarclave.php?email='.$form["email"].'&codseg='.$form["seguridad"].'">Modificar Clave</a>',$user);
		$message .=$link;
		$message .="</body></html>";
	$obj=$objsol->insertar(date("Y/m/d"),$email,$seguridad,'Recuperar Clave','1');
	mail($enviarA, $asunto, $message, $headers);
	$objResponse->alert("Revice Su Correo y active enlace");
	$objResponse->call("cancelarRegistro");
	}
 	}
	else{
		$objResponse->alert("Correo no Registrado");
	}
	return $objResponse;
}
?>
