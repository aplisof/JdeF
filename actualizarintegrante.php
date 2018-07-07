<?php
	require_once("conexion.php");
	$nombres=$_GET["nombres"];
	$apellidos = $_GET["apellidos"];
	$fnacimiento = $_GET["fna"];
	$direccion = $_GET["dir"];
	$barrio = $_GET["bar"];
	$telresidecia = $_GET["telper"];
	$telcelular = $_GET["telmov"];
	$email = $_GET["email"];
	$nivele=$_GET["ne"];
	$actividad = $_GET["ac"];
	$profesion = $_GET["pr"];
	$ecivil = $_GET["ecivil"];
	$nhijos = $_GET["nh"];
	$grupoc = $_GET["grupoc"];
	$activog = $_GET["ag"];
	$fingreso = $_GET["fi"];
	$bautizado = $_GET["bau"];
	$fbautizo = $_GET["fbau"];
	$eformacion = $_GET["efor"];
	$eslider = $_GET["esli"];
	$lideract = $_GET["lidera"];
	$aconversion = $_GET["acon"];
	$funcion = $_GET["fun"];
	$codigo = $_GET["cedula"];
	$nombres = ucwords(strtolower($nombres));
	$apellidos = ucwords(strtolower($apellidos));
	$direccion = ucwords(strtolower($direccion));
	$activog = ucwords(strtolower($activog));
	$bautizado = ucwords(strtolower($bautizado));
	$eformacion = ucwords(strtolower($eformacion));
	$eslider = ucwords(strtolower($eslider));
	$lideract = ucwords(strtolower($lideract));
	$funcion = ucwords(strtolower($funcion));
	$nivele = ucwords(strtolower($nivele));
	$actividad = ucwords(strtolower($actividad));
	$profesion = ucwords(strtolower($profesion));
	$barrio = ucwords(strtolower($barrio));
	$sql = "UPDATE integrante set nombres='".$nombres."',apellidos='".$apellidos."',fnacimiento='".$fnacimiento
	."',direccion='".$direccion."',barrio='".$barrio."',telresidecia='".$telresidecia
	."',telcelular='".$telcelular."',email='".$email."',nivele='".$nivele
	."',actividad='".$actividad."',profesion='".$profesion."',ecivil='".$ecivil."',nhijos='".$nhijos
	."',grupoc='".$grupoc."',activog='".$activog."',fingreso='".$fingreso."',bautizado='".$bautizado
	."',fbautizo='".$fbautizo."',eformacion='".$eformacion."',eslider='".$eslider."',lideract='".$lideract
	."',aconversion='".$aconversion."',funcion='".$funcion."'where idintegrante='".$codigo."'";
	$res=mysql_query($sql,$conn);	
	mysql_close($conn);
	echo "<html>
	<head>
	<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrointegrante.php?cc=$codigo'>
	</head>
	</html>
	";	
?>