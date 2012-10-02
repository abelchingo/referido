<?php
header ("Content-type: image/gif");
$imagenes=array("img/cod_seguridad.gif","img/cod_seguridad1.gif","img/cod_seguridad2.gif","img/cod_seguridad3.gif","img/cod_seguridad4.gif");
$img="img/cod_seguridad1.gif";
$im = @imagecreatefromgif($img); 
$color_fondo = ImageColorAllocate ($im, 240, 240, 240); 
$color_texto = ImageColorAllocate ($im,8, 8,8);
imagerectangle($im,0,0,80,10, 1);
imagestring ($im,8, 4, 4,$_REQUEST["serie"], $color_texto); 
imagegif ($im);

?>


