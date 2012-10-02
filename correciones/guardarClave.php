<?php
	if (eregi("(\r|\n)", $_POST["email"]) || eregi("(\r|\n)", $_POST["clave"]) ||eregi("(\r|\n)", $_POST["reclave"])||eregi("(\r|\n)", $_POST["seguridad"])) {
		header('Location:index.php');		
	}
	else{	
	require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
	Aplicacion::iniciar();
	Aplicacion::clase('Core::datos::MiReferido::DatUsuario');
    $dato=new DatUsuario;
    $cont=$dato->compruebaRegistroUsuario($_REQUEST["email"]);
	if($cont==1){
		Aplicacion::clase('Core::datos::MiReferido::DatMensajeAdmin');
	$menj=new  DatMensajeAdmin;
	$datomsqj=$menj->getxPk("MSJCLAVERECUPERADA"."ES");
	$asunto = trim($datomsqj[0]['men_asu']);
    $email=$_POST["email"];
	$seguridad=$_POST["seguridad"];
	$enviarA = $email;
	$remitente = $email;	
		$headers = "From: info@referidos.com\nReply-To:".$email." \nContent-Type: text/html; charset=iso-8859-1";
		$message ="<html>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
		<style type='text/css'>
		<!--
		.Nav_01 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3B4742;}
		-->
		</style>
		</head>
		<body class= 'Nav_01'>
		<hr>
		<hr>";
		$user=ereg_replace("_user_",$email,utf8_encode($datomsqj[0]['men_conten']));
		$user=ereg_replace("_clave_",$_POST["clave"],$user);
		$link=ereg_replace("_linkWebMiReferido_",'<a href="http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/index.php">www.Mireferido.com</a>',$user);
		$link=ereg_replace("_linkWebMiReferidoSesion_",'<a href="http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/miembros/index.php">Iniciar Sesion Aqui</a>',$link);
	   $message .=$link."<br><hr></body></html>";

//chmod($ruta,0777);
   $dato->actualizarClave($_POST["email"],$_POST["clave"],'AC');
   mail($enviarA, $asunto, $message, $headers);
   ?>
	<script>
	alert("password Actualizado correctamente");
	document.location.href="index.php";
	</script>
	<?php
	}	
}
?>
