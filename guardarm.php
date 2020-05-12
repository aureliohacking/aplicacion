<?php
$host = "localhost";
$basededatos = "datos";
$usuariodb = "root";
$clavedb = "";

$json=array();

	if (isset($_GET["numer"])&&isset($_GET["mensaje"]))
	{
		$numer=$_GET["numer"];
		$mensaje=$_GET["mensaje"];

		$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

		$consulta=mysqli_query($conexion,"INSERT INTO mensajes (numer, mensaje) VALUES ('{$numer}', '{$mensaje}')");	   
	}
	mysqli_close($conexion);
	
	?>