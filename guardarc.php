<?php
$host = "localhost";
$basededatos = "datos";
$usuariodb = "root";
$clavedb = "";

$json=array();

	if (isset($_GET["nombre"])&&isset($_GET["numero"]))
	{
		$nombre=$_GET["nombre"];
		$numero=$_GET["numero"];

		$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

		$consulta=mysqli_query($conexion,"INSERT INTO contactos (nombre, numero) VALUES ('{$nombre}', '{$numero}')");	   
	}
	mysqli_close($conexion);
	
	?>