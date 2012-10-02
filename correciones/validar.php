<?php
validar('abel_chingo@hotmail.com');
function validar($usuario){
if (!preg_match("/^[a-zA-Z0-9\-_@.]{5,100}$/", $usuario)) { 		 
echo $usuario.' no es valido';
		 }
		 else
		 echo $usuario." es valido";
}
?>
