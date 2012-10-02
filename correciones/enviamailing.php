<?	
function quita_xss()
{
	foreach ($_REQUEST as $indi=>$check_url) {
		if ((eregi("<[^>]*script*\"?[^>]*>", $check_url)) || (eregi("<[^>]*object*\"?[^>]*>", $check_url)) ||
			(eregi("<[^>]*iframe*\"?[^>]*>", $check_url)) || (eregi("<[^>]*applet*\"?[^>]*>", $check_url)) ||
			(eregi("<[^>]*meta*\"?[^>]*>", $check_url)) || (eregi("<[^>]*style*\"?[^>]*>", $check_url)) ||
			(eregi("<[^>]*form*\"?[^>]*>", $check_url)) || (eregi("\([^>]*\"?[^)]*\)", $check_url)) ||
			(eregi("\"", $check_url))) {
		unset($_REQUEST[$indi]); 
		}
	}
}
quita_xss();
	$flag=0; 
	//$sendTo = "edtledu@hotmail.com" ;
/*
	include("conexion.php");
	$r_configuraciones=mysql_query("SELECT * FROM configuracion c;",
	$conexion);	
	while($row_configuraciones=mysql_fetch_array($r_configuraciones)){
		$xema_1=$row_configuraciones[1];
		$xema_2=$row_configuraciones[2];		
		$xco=$row_configuraciones[4];		
	}
*/
/*
	$xema_1="central@servimedicsst.com";
	$xema_2="hquispe@servimedic.com.pe";		
*/
	$xema_1="edtledu@hotmail.com";
	//$xema_2="miguelrios@seattlewebmedia.com";	
	$xco="CUPON MI REFERIDO";		
	
	
	//$sendTo = $xema_1.;.$xema_2;
	$sendTo = $xema_1;
	$subject = $xco." - Contacto Web"; 
	//$remitente=$_REQUEST["xemail"];
	$remitente="eduardo@seattlewebmedia.com";
	
	if (eregi("\r",$remitente) || eregi("\n",$remitente) || eregi("\r",$asunto) || eregi("\n",$asunto)){ 
     $flag=1; 
	} 
	
	if ($flag == 0) {
	
		if ($remitente!=""){
		
			$nombre = $_REQUEST["xnom"];
			$empresa = $_REQUEST["xemp"];
			$mensaje = $_REQUEST["xcomentario"];
			$email = $_REQUEST["xemail"];
			$fono = $_REQUEST["xtel"];
			$celular = $_REQUEST["xcel"];			
			$xruc = $_REQUEST["xruc"];
			$xdistrito = $_REQUEST["xdistrito"];
			$xciudad = $_REQUEST["xciudad"];			

			
			$headers = "From: $remitente\nReply-To: $remitente\nBCC: $xema_2\nContent-Type: text/html; charset=iso-8859-1";
			
			//$headers = "From: $remitente\nReply-To: $remitente\nBCC: eduardo@astecsea.com\nContent-Type: text/html; charset=iso-8859-1";
			
			$message ="
			
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Carne Asada</title>
<link href='http://www.mireferido.com/css/estilosPEN.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
<!--
.Estilo7 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo8 {
	color: #336699;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 10px;
}
.Estilo9 {
	font-size: 34px;
	color: #000000;
}
.Estilo14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: #333333; }
.Estilo15 {color: #FFFFFF}
.Estilo16 {font-size: 9px}
body {
	background-image: url(http://www.mireferido.com/img/bg_PaginaEN.jpg);
}
-->
</style>
</head>

<body>


<iframe title='fotos' width='315' height='295' frameborder='0' scrolling='No' marginheight='0' marginwidth='0' src='http://www.google.com.pe/'></iframe>
</body>
</html>
			
			
			";		
			if(mail ($sendTo, $subject, $message, $headers)){
				echo "Mensaje enviado, Gracias por escribirnos";	
				?>
				<script language="javascript">
				function cerrar(){ 
					//window.close() 
					//location.href='index.php';
				} 
				
				setTimeout("cerrar()",3000); 
				</script>
				
				
				
				<?
				
			}
			
			
		}
	}
?>
