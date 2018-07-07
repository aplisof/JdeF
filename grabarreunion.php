<?php
	require_once("conexion.php");
	$desreunion=$_GET["desre"];
	$tiporeunion = $_GET["treun"];
	$idanfitrion = $_GET["idan"];
	$nombreanfitrion = $_GET["noman"];
	$direccion = $_GET["dir"];
	$telefono = $_GET["tel"];
	$diareunion = $_GET["diar"];
	$hreunion = $_GET["hreu"];
	$grupo=11;
	$codigo = $_GET["cedula"];
	$desreunion = ucwords(strtolower($desreunion));
	$tiporeunion = ucwords(strtolower($tiporeunion));
	$nombreanfitrion = ucwords(strtolower($nombreanfitrion));
	$direccion = ucwords(strtolower($direccion));
	$diareunion = ucwords(strtolower($diareunion));
	$sql = "INSERT INTO reunion VALUES(".$codigo.",'".$desreunion."','".$tiporeunion."','".$idanfitrion."','".$nombreanfitrion."','".$direccion."','".$telefono."','".$diareunion."','".$hreunion."','".$grupo."')";
	$res=mysql_query($sql,$conn);	
	mysql_close($conn);
	echo "<html>
	<head>
	<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registroreunion.php?ir=$codigo'>
	</head>
	</html>
	";	
?>