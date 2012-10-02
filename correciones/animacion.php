<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
$idioma=!empty($_REQUEST["idioma"])?$_REQUEST["idioma"]:'ES';
Aplicacion::clase('Core::datos::MiReferido::DatAnimacion');
$oAnimacion = new DatAnimacion;
$banners = $oAnimacion->listar();
if(count($banners) == 0 ) {
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MI Referido.com - Mas que un directorio Billingue - Gana Premios - Imprime Cupones - Ahorra Dinero - Incrementa tus Ventas</title>
<style type="text/css">
body {
	text-align:center;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<script src="js/animacion.js" type="text/javascript"></script>
</head>
<body>
<script>
<?php 
$i=0;
$ruta='media/animacion/';
$idi = empty($_REQUEST['idi']) ? 'ES' : $_REQUEST['idi'];
foreach($banners as $banner) {
	if($idioma == $banner['idi_cod'] && 1 == $banner['estado']) {
	if(!empty($banner['archivo'])){
		$i++; ?>	
	addImagenes(<?php echo $i;?>,'<?php echo $ruta.$banner['archivo'];?>','','<?php echo !empty($banner['enlace'])?("http://".eregi_replace("http://","",$banner['enlace'])):'';?>');
<?php }}}?>
</script>
<div style="position:absolute; top:210px; right:3%; " id="txtNum"></div>
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="xFondoAnimacion" style="background:url(<?php echo $fondo1; ?>);">
<tr><td  id="xImagenAnimacion" valign="top" align="center"></td></tr>
</table>
<!--<div style="background:url(img/numeros/aniborde.jpg); height:22;">&nbsp;</div>-->
<script>mostrar();</script>
</body>
</html>