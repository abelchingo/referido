<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();

require_once("librerias/xajax/xajax_core/xajax.inc.php");
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('ajax/funciones.php');
$xajax->processRequest();
if((($_REQUEST["email"]=="")||($_REQUEST["codseg"]==""))&&(eregi("(\r|\n)",$_REQUEST["email"])||eregi("(\r|\n)",$_REQUEST["codseg"]))){
	printf("Usted no tiene ninguna solicitud Activa ");
    exit('<META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php">');
}
else{
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatSolicitud');

$dato=new DatSolicitud;
$cont=$dato->verificasolicitud($_REQUEST["email"],$_REQUEST["codseg"]);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Referidos.com</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<script src="js/funciones.js" language="javascript"></script>
<?php $xajax->printJavascript( "librerias/xajax/" ) ?>
</head>
<body bgcolor="#000000"><br><br><br><br><br>
<div align="center">
<?php
				if($cont>0){
				$serie="";
	$codigo="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($i=0;$i<5;$i++)
	{
		$serie=$serie.$codigo{rand(1,25)}." ";
	}
				?>
				<form name="frmRecCuenta" id="frmRecCuenta" method="post" action="guardarClave.php" onSubmit="return recuperaclave(1);">
	<input type="hidden" name="accion" value="Nuevo">
	<input type="hidden" name="codseg" id="codseg" value="<?php echo ereg_replace(" ","",$serie); ?>"/>
	<table border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#F5F5F5">
 	<tr>
 	  <th  colspan="4" align="center">Recuperaci&oacute;n de su  nueva Clave</th></tr>
	<tr><td valign="top" height="5" colspan="4"><hr></td></tr>
    <tr ><th align="right">Email</th><th>:</th><td colspan="2"><input type="text" readonly name="email" id="email" value="<?php echo $_REQUEST["email"];?>" style="width:200px; background-color:#FFECFC;"></td>
    </tr>
	<tr><th align="right">Clave</th><th>:</th>
      <td colspan="2"><input type="password" name="clave" id="clave" onKeyUp="validarCar(this,event);"  style="width:200px;"></td>
    </tr>
    <tr><th align="right">Re-Clave</th><th>:</th>
      <td colspan="2"><input type="password" name="reclave" id="reclave" onKeyUp="validarCar(this,event);"  style="width:200px;"></td>
    </tr>
    <tr><th>C. Seguridad</th><th>:</th><td><input name="seguridad" id="seguridad" size="5" maxlength="5" class="txt" onKeyUp="validarCar(this,event);" ></td>
       <td valign="middle" align="left"><img id="imagenSeg" onDblClick="xajax_cargarcodseg();" title="doble click para recargar la imagen" src="imagenseg.php?serie=<?php echo $serie;?>"></td>
 	</tr><tr><td valign="top" height="5" colspan="4"><hr></td></tr>
    <tr><td colspan="4" align="center"><input type="submit" value="Guardar">&nbsp;&nbsp;
      <input type="button" onClick="cancelar()" name="btncancelar" id="btncancelar" value="cancelar"/></td></tr>
	</table>
	            </form>
	<?php }else {
		Aplicacion::clase('Core::datos::Sistema::DatMensajeSistema');
		$oMensajeSistema = new DatMensajeSistema;
		$msj_ = $oMensajeSistema->get('MSJ_SOL_ACT_REC_CLA', 'ES');
		?>
        <script>alert('<?php echo utf8_encode(@$msj_[0]['men_texto'])?>');</script>
        <?php
   		echo'<META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php">';
		}
}?>
<script>
function recuperaclave(x)
{
	if(x==1)form=document.frmRecCuenta;
    var error="";
	var n=0;
	if(form.clave.value==""){error+="\n->Clave no puede Estar Vacio"; if(n==0)n=1;}
	if(form.reclave.value==""){error+="\n->Clave no puede Estar Vacio"; if(n==0)n=2;}
	if(form.clave.value!=form.reclave.value){error+="\n->Claves no coinciden"; if(n==0)n=3;}
	if(form.seguridad.value.toLowerCase()!=form.codseg.value.toLowerCase()){error+="\n->Codigo Seguridad Incorrecto ";if(n==0)n=4;}
	if(error!=""){
		switch(n){
	 	case 1 :
		 form.clave.focus();
		 break;
		case 2 :
		 form.reclave.focus();
		 break;
		case 3 :
		 form.clave.focus();
		 break;
	 	case 4 :
		 form.seguridad.focus();
		 break;
	}
	alert("A Surguido los siguientes Errores\n============================\n"+error);
	xajax_cargarcodseg();
	return false;
	}
	return true;
}
function cancelar(){
document.location.href="index.php";
}
</script>
</div>
</body>
</html>