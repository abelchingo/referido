<?php 
$xajax->register(XAJAX_FUNCTION,"frmsolcitudcuenta");
$xajax->register(XAJAX_FUNCTION,"cargarcodseg");
$xajax->register(XAJAX_FUNCTION,"procesarfrmsolcitudcuenta");
$xajax->register(XAJAX_FUNCTION,"procesarfrmsesion");
function frmsolcitudcuenta()
{   $serie="";
	$codigo="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($i=0;$i<5;$i++)
	{
		$serie=$serie.$codigo{rand(1,25)}." ";
	}
	$objResponse = new xajaxResponse();
	$frm='<div id="ventFlot" style="width:400px; margin-top:100px;"><div class="icoCerrar" onclick="quitarMascara()"><img src="img/cerrar.jpg" border="0" height="20"></div><div class="titulo">Solicitar Registro Cuenta</div><div class="conten"><form name="frmRegistrase" id="frmRegistrase" method="post" action="javascript:void(null)" onSubmit="validarfrmRegistro(1)">
	<input type="hidden" name="codseg" id="codseg" value="'.ereg_replace(" ","",$serie).'"/>
	<table border="0" align="center" cellpadding="1" cellspacing="1">
	<tr><th colspan="4"></th></tr>
	<tr><td valign="bottom" height="5" colspan="4"><hr></td></tr>
 	<tr>
        <th align="left" valign="top" >Ingrese su E-mail</th><th valign="top">:</th>
        <td colspan="2"><input name="email" id="email" size="25" maxlength="150" class="txt" onKeyUp="validarCar(this,event);"><br><font color="#9E9E9E" size="-1">(este sera su cuenta de acceso)</font></td>
    </tr>
	<tr><th colspan="4" height="8">&nbsp;</th></tr>
    <tr>
       <th valign="top">Caracteres</th><th valign="top">:</th>
       <td><input name="seguridad" id="seguridad" size="10" maxlength="5" class="txt" onKeyUp="validarCar(this,event);"></td>
       <td valign="middle">
	   <img id="imagenSeg" ondblclick="xajax_cargarcodseg();" title="doble click para recargar la imagen" src="imagenseg.php?serie='.trim($serie).'">
	   </td>
 	</tr>
	<tr><td></td><th></th><td colspan=2><font color="#9E9E9E" size="-1">(Ingrese los 5 caracteres que ves)</font></td></tr>
 <tr><td valign="top" height="5" colspan="4"><hr></td></tr>
 <tr><td colspan="4" align="center"><input type="submit" value="Enviar Solicitud" class="btn">
     </td></tr>
  </table> </form></div></div>';
    $objResponse->assign('pnlContenMascara','innerHTML',$frm);
	return $objResponse;
	}

function cargarcodseg(){	
    $serie="";
	$codigo="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($i=0;$i<5;$i++)
	{
		$serie=$serie.$codigo{rand(1,25)}." ";
	}
	$objResponse = new xajaxResponse();
	$oimg='imagenseg.php?serie='.$serie;
	$objResponse->assign('imagenSeg','src',$oimg);
	$objResponse->assign('codseg','value', ereg_replace(" ","",$serie));
	return $objResponse;
}
	
	
function procesarfrmsolcitudcuenta($form){
	$objResponse = new xajaxResponse();
	require_once("sysdatos/cls.DatUsuario.php");
	$email=$form["email"];
	$objusu=new DatUsuario;
	$contaremail=$objusu->compruebaRegistroUsuario($email);
   if($contaremail==0){
		$seguridad=$form["seguridad"];
		$enviarA = $email;
		$remitente = $email;
		if (eregi("(\r|\n)", $email) || eregi("(\r|\n)", $seguridad)) {
			$objResponse->alert("Valores incorrectos");
			$objResponse->call("xajax_cargarcodseg");
		}
		 else{	
		require_once("sysdatos/cls.DatMensajeAdmin.php");
		$menj=new  DatMensajeAdmin;
		$datomsqj=$menj->getxPk("MSJACTCUENTA"."ES");
		$asunto = trim($datomsqj[0]['men_asu']);
		$headers="From: Mi Referido <info@referidos.com>\nReply-To:".$email."\nContent-Type: text/html; charset=iso-8859-1";
		$message ="<html><head><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
		<style type='text/css'>
		<!--
		.Nav_01 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3B4742;}
		-->
		</style></head>
		<body class= 'Nav_01'><hr>";
		$user=ereg_replace("_user_",$email,utf8_encode($datomsqj[0]['men_conten']));
		$link=ereg_replace("_linkActivar_",'<a href="http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/frmcontratocuenta.php?email='.$email.'&codseg='.$seguridad.'">Activar Cuenta </a>',$user);
		$message .=$link."<hr></body></html>";
		require_once("sysdatos/cls.DatSolicitud.php");
		$objsol=new DatSolicitud;
		$obj=$objsol->insertar(date("Y/m/d"),$email,$seguridad,'Nuevo Usuario','1');
		mail($enviarA, $asunto, $message, $headers);
		$objResponse->alert("Datos Enviados Correctamente,Revice Su Correo");
		$objResponse->call("cancelarRegistro");

}
	}
	else{
		$objResponse->alert("Correo ya Registrado");
	}
 
	return $objResponse;
}
function procesarfrmsesion($form){
	$objResponse = new xajaxResponse();
	
	try {
		$usu=$form["txtUsuario"];
		$cla=$form["txtClave"];
		if (eregi("(\r|\n)",$usu) || eregi("(\r|\n)", $cla))
			$objResponse->alert("Valores incorrectos");
		else{
			require_once("miembros/admin.php");
			Aplicacion::clase('Core::negocio::Miembros::NegSesionMiembro');
			$objsol=new NegSesionMiembro;
			$objsol->iniciar('adMiembros.1.0', $usu, $cla);
			$objResponse->call("newpagina","miembros/index.php");
		}
	} catch(Exception $e) {
		$objResponse->alert(utf8_encode($e->getMessage()));
	}
	
	return $objResponse;
}
?>