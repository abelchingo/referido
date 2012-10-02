<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('xajax/xcomentario.php');
$xajax->processRequest();
$idioma='ES';
?>
<html>
<head>
<link href="css/estilosPES.css" rel="stylesheet" type="text/css">
<?php $xajax->printJavascript( "librerias/xajax/" )?>
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
<div id="pnlListadoComentario" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....
<script language="javascript">
xajax_listarComentario('<?php echo $idioma;?>',16,0,5);
</script>
</div>
<div id="cargando" style=" text-align:center; vertical-align:middle; border: thin 1px #000; background:#060;position:fixed;width:180px; height:32px;top:100%;left:0%;margin-top:-20px;margin-left:0px; display:none; z-index:3000;"></div>
</body>
</html>