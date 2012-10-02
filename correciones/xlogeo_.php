<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('xajax/xlogeo.php');
$xajax->processRequest();
?>
<html>
<head>
<link href="css/estilos_n.css" rel="stylesheet" type="text/css">
<?php $xajax->printJavascript( "librerias/xajax/" )?>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript">
  function cargandofuncion(){
     document.getElementById('cargando').style.display='block';
      document.getElementById('cargando').innerHTML='<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....';
   }
   function funcioncargada(){
	  
      document.getElementById('cargando').innerHTML='';
      document.getElementById('cargando').style.display='none';
   }
   xajax.callback.global.onResponseDelay = cargandofuncion;
   xajax.callback.global.onComplete = funcioncargada;
</script>
</head>
<body>
<div id="pnlIniciarSesion" class="pnlIniciarSesion" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....
<script language="javascript">
xajax_iniciarSesion(null);
</script>
</div>
<div id="cargando" style=" text-align:center; vertical-align:middle; border: thin 1px #000; background:#060;position:fixed;width:180px; height:32px;top:100%;left:0%;margin-top:-20px;margin-left:0px; display:none; z-index:3000;"></div>
<?php 
@session_start();
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
$var=NegSesionMiembro::existeSesion('adMiembros.1.0');
if($var){
echo "usted se ha logeado correctamente";
}

?>
<script language="javascript">
function loguear()
{
	var error = "";
	var n = 0;
	form = document.frmLogeo;	
	if(form.txtUsuario.value == "") {
		alert("Ingrese su usuario");
		form.txtUsuario.focus(); 
		return false;
	}
	if(form.txtClave.value == ""){
		alert("No ha escrito su clave");
		form.txtClave.focus();
		return false;
	}	
	xajax_loguear(form.txtUsuario.value, form.txtClave.value);
}

function recargarPagina()
{
	window.location.href = window.location.href;
}
</script>
</body>
</html>