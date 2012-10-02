<?php
@session_start();

if(empty($_POST['hdCodigo']) || empty($_POST['txtEmail']) || empty($_POST['txtCodigo'])) {
} else {
	require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
	Aplicacion::iniciar();
	Aplicacion::clase('Core::datos::MiReferido::DatEmailMarketing');
	
	$oDatEmailMarketing = new DatEmailMarketing;
	
	$email_ = $oDatEmailMarketing->getxEmail2($_POST['txtEmail']);
	
	if(!empty($email_[0])) {
		if($oDatEmailMarketing->setEstado2($_POST['txtEmail'], 'NA', date('Y-m-d'))) {
			@session_start();
			$_SESSION['emailDA'] = $_POST['txtEmail'];
		}
	}
}
header('Location:no-mas-correos.php?idi='.@$_POST['idi']);
?>