<?php
	include('BaseDatos.php');
	$variableRolUsuario = $_POST['roles'];
	$variableNombreUsuario = $_POST['nombreUsuario'];
	$variablePasswordUsuario = $_POST['passwordUsuario'];

	echo "rol del usuario: $variableRolUsuario";
	echo "Nombre del Usuario: $variableNombreUsuario";
	echo "Password del Usuario: $variablePasswordUsuario";

	function validar($variableRolUsuario, $variableNombreUsuario, $variablePasswordUsuario) {

	}

?>