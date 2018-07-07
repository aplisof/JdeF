<?php
	require_once("conexion.php");
	//mysql_query("SET NAMES 'utf8'");
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
	$desreunion =  ucwords(strtolower($desreunion));
	$tiporeunion = ucwords(strtolower($tiporeunion));
	utf8_encode($tiporeunion);
	$nombreanfitrion = ucwords(strtolower($nombreanfitrion));
	$direccion = ucwords(strtolower($direccion));
	$diareunion = ucwords(strtolower($diareunion));
	$sql = "UPDATE reunion set desreunion='".$desreunion."',tiporeunion='".$tiporeunion."',idanfitrion='".$idanfitrion."',nombreanfitrion ='".$nombreanfitrion."',direccion='".$direccion."',telefono='".$telefono."',diareunion='".$diareunion."',hreunion='".$hreunion."' where idreunion='".$codigo."'";	
	$res=mysql_query($sql,$conn);	
	//mysql_query("SET NAMES utf8");
	mysql_close($conn);
	echo "<html>
	<head>
	<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registroreunion.php?ir=$codigo'>
	</head>
	</html>
	";	
?>