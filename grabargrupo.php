<?php
	require_once("conexion.php");
	$nombreG=$_GET["nombreg"];
	$Idlp = $_GET["idlp"];
	$Nomlp = $_GET["nombrelp"];
	$Idls = $_GET["telper"];
	$Nomls = $_GET["telmov"];
	$codigo = $_GET["cedula"];
	$nombreG = ucwords(strtolower($nombreG));
	$Nomlp = ucwords(strtolower($Nomlp));
	$Nomls = ucwords(strtolower($Nomls));
	$sql = "INSERT INTO grupoc VALUES(".$codigo.",'".$nombreG."','".$Idlp."','".$Nomlp."','".$Idls."','".$Nomls."')";
	$res=mysql_query($sql,$conn);	
	mysql_close($conn);
	echo "<html>
	<head>
	<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrogrupo.php?ig=$codigo'>
	</head>
	</html>
	";
?>