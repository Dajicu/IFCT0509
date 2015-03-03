<?php 
	//Datos del servidor y la base de datos:
	$server = "192.168.1.88";
	$username = "david";
	$password = "david1974";
	$database_name = "davidprueba";

	//creamos la conexion:
	$mysqli = new mysqli($server, $username, $password, $database_name);
	if($mysqli->connect_errno)
		die("Error al conectar".$mysqli->connect_error);
	else
		
?>