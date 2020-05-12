<?php
$host = "localhost";
$basededatos = "datos";
$usuariodb = "root";
$clavedb = "";

$json=array();

	if (isset($_GET["ubi"]))
	{
		$ubi=$_GET["ubi"];

		$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

		$consulta=mysqli_query($conexion,"INSERT INTO ubicacion (latitud_longitud) VALUES ('{$ubi}')");	   
	}
	mysqli_close($conexion);
	
	?>