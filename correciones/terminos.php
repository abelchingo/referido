<?php 
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatContrato');
$oContrato = new DatContrato;
$con=$oContrato->getxId('02','ES');
if(!empty($con[0])){
	$con=$con[0];
	echo $con["cont_texto"];
}
?>
