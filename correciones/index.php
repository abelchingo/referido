<?php
if($_SERVER['HTTP_HOST']=='www.mireferido.com'||$_SERVER['HTTP_HOST']=='mireferido.com'||$_SERVER['HTTP_HOST']=='http://www.mireferido.com')
header('location:inicio.php');
else
header('location:inicio_EN.php');
?>