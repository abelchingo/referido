<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
$mensaje="";
	@session_start();
if(!empty($_POST['txtEmail'])&&!empty($_POST['seguridad'])){				
		Aplicacion::clase('Core::datos::MiReferido::DatMensajeAdmin');
		Aplicacion::clase('Core::datos::Sistema::DatUsuario');
		$email=$_POST['txtEmail'];
		$seguridad=$_POST['seguridad'];
	    $objusu=new DatUsuario;
	    $contaremail=$objusu->compruebaRegistroUsuario($email);
	 if($contaremail==0){		
		$menj=new  DatMensajeAdmin;
		$datomsqj=$menj->getxPk("MSJACTCUENTA"."ES");
		$asunto = trim($datomsqj[0]['men_asu']);
		$headers="From: Mi Referido <info@mireferido.com>\nReply-To:".$email."\nContent-Type: text/html; charset=iso-8859-1";
		$message ="<html><head><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
		<style type='text/css'>
		<!--
		.Nav_01 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3B4742;}
		-->
		</style></head>
		<body class= 'Nav_01'><hr>";
		
		
	
		if(!empty($_SESSION['PrOmOtOr_CoD']))	
		$url_='http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/Promotor/'.$_SESSION['PrOmOtOr_CoD'].'_'.$_SESSION['PrOmOtOr_NoM'];
		else
		$url_='http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']);
		$user=ereg_replace("_user_",$email,utf8_encode($datomsqj[0]['men_conten']));
		$link=ereg_replace("_linkActivar_",'<a href="http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/frmcontratocuenta.php?email='.$email.'&codseg='.$seguridad.'">Activar Cuenta </a>',$user);
		
		$message .=$link."<hr></body></html>";
		Aplicacion::clase('Core::datos::MiReferido::DatSolicitud');
		$objsol=new DatSolicitud;
		
		$obj=$objsol->insertar(date("Y/m/d"),$email,$seguridad,'Nuevo Usuario','1',$_SESSION['PrOmOtOr_CoD'],$url_);
		mail($email, $asunto, $message, $headers);?>
		<script>
		alert("Datos enviados correctamente, revise su correo");
        window.location="inicio.php";
        </script>
		<?php
	 } else {
		$mensaje="Email ya esta Registrado";
       }
}
require_once("librerias/xajax/xajax_core/xajax.inc.php");
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('ajax/funciones.php');
$xajax->processRequest();
	$serie="";
	$codigo="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($i=0;$i<5;$i++)
	{
		$serie=$serie.$codigo{rand(1,25)}." ";
	}
				
				
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MI Referido.com - Mas que un directorio Billingue - Gana Premios - Imprime Cupones - Ahorra Dinero - Incrementa tus Ventas</title>
<siwebsi:incluir tipo="cabecera" />
<link href="<?php echo BASE_REL?>css/estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_REL?>/miembros/publico/css/logueo.css" />

<?php $xajax->printJavascript( "librerias/xajax/" ) ?>
</head>

<body>
<div id="mr_header">
<a href="<?php echo BASE_REL?>index.php"><img src="<?php echo BASE_REL;?>miembros/publico/img/logo.jpg"></a>
</div>

<div id="mr_modHori">
	<div id="mr_conten_mod">
    </div>
</div>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <div class="medio">
    	<siwebsi:incluir tipo="contenido" /><center>
    	<table width="450" border="0" align="center">
    	  <tr>
    	    <td class="lbl1">Formulario de solicitud de registro</td>
  	    </tr>
    	  <tr>
    	    <td class="lbl2" align="justify"> Ingrese su Email que sera utlizado para su cuenta de usuario e introduce los caracteres mostrados en la imagen  para poder enviarle un mensaje de correo con un enlace hacia una direccion donde usted podra registrarse.</td>
  	    </tr>
    	  <tr>
    	    <td style="background-color:#FFFFFF;">
            <form action="#"  method="post" name="frmRegCuenta" id="frmRegCuenta" onSubmit="return validar()">
    	      <table>
    	        <tr>
    	          <td rowspan="4" class="imgUsuarioReg">&nbsp;</td>
    	          <td align="left" class="lbl3"> Ingrese su Usuario/Email :</td>
    	          <td colspan="3"><input name="txtEmail" type="text" maxlength="150" style="width:200px;" class="txtForm" id="txtEmail" /></td>
  	          </tr>
    	        <tr>
    	          <td align="left" class="lbl3">Introduce los caracteres mostrados :</td>
    	          <td><input name="seguridad" id="seguridad" size="10" maxlength="5" class="txtForm" onKeyUp="validarCar(this,event);" ></td>
    	          <td colspan="2"><input type="hidden" name="codseg" id="codseg" value="<?php echo ereg_replace(" ","",$serie);?>"/>
                  <img id="imagenSeg" onDblClick="xajax_cargarcodseg();" title="doble click para recargar la imagen" src="imagenseg.php?serie=<?php echo $serie;?>"></td>
  	          </tr>
			  <?php 
			  @session_start();
			  if(!empty($_SESSION['PrOmOtOr_CoD'])){?>
			  <tr>
    	          <td  colspan="4" align="left" class="lbl3">Promotor :
				  <input type="hidden" name="PrOmOtOr_CoD" id="PrOmOtOr_CoD" value=" <?php echo $_SESSION['PrOmOtOr_CoD'];?>" />
				  <input type="hidden" name="PrOmOtOr_NoM" id="PrOmOtOr_NoM" value=" <?php echo $_SESSION['PrOmOtOr_NoM'];?>" />
				  <?php echo $_SESSION['PrOmOtOr_CoD'].' - '.$_SESSION['PrOmOtOr_NoM']; ?>
				  </td>    	          
  	          </tr>
			  <?php }?>
    	        <tr><td colspan="4" class="lblMensaje" align="center"><br /><b><?php echo $mensaje;?></b></td></tr>
    	        <tr>
    	          <td align="right" colspan="4"><hr />
                  <input name="btnCancelar" type="button" onClick="window.location='index.php'" value="Cancelar" class="btn" /> &nbsp;&nbsp; <input name="btnAceptar" type="submit" value="Enviar" class="btn" /></td>
                  </tr>
  	        </table>
    	      <input type="hidden" name="comp" value="libre" />
    	      <input type="hidden" name="cls" value="sesion" />
    	      <input type="hidden" name="met" value="iniciar" />
  	      </form></td>
  	    </tr>
  	  </table></center>
    </div>
    
    <div class="clr"></div>
</td>
  </tr>
</table>

<div id="mr_pie">
Mi Referido.com &copy; 2009
</div>
<?php if(!empty($_SESSION['PrOmOtOr_CoD'])){
Aplicacion::clase('Core::datos::MiReferido::DatUsuario');
$oPro = new DatUsuario;
$pro=$oPro->getxPK($_SESSION['PrOmOtOr_CoD']);
$pro=$pro[0];
?>
<div id="pnlPromotorFloat">
<table width="351" border="0" cellpadding="2" cellspacing="2">
<tr>
<th colspan="2" class="pnlinSub" align="left">&nbsp;Bienvenidos a Mireferido.com</th></tr>
<tr><td width="60" align="center"><img src="http://<?php echo $_SERVER['HTTP_HOST'].'/miembros/publico/fotosUsuario/'.$pro["usu_foto"]; ?>" width="50" border="0"></td>
<td width="354" style="text-align:justify; font:Arial, Helvetica, sans-serif 10px; margin:3 3 3 3; padding-right:3px; vertical-align:top;">Mi Nombre es <strong><?php echo @$pro["usu_nom"].' '.@$pro["usu_ape"];?></strong> y usted esta entrando a mi pagina de promotor. 
Usted puede registrar su negocio y gozar de los beneficios de esta gran familia</td>
</tr>
</table>
</div>
<?php }?>
<script>
function validar(){
	form=document.frmRegCuenta;
	if(form.seguridad.value.toLowerCase()!=form.codseg.value.toLowerCase()){
	alert("Codigo Seguridad Incorrecto ");
	form.seguridad.focus();
	return false;
	}
	return true;
	
}

</script>
</body>
</html>