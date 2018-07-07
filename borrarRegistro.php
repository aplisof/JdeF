<?php
	require_once("conexion.php");
	$cedula=$_GET["cedula"];
	$Nombre=$_GET["Nombre"];
	$Ministerio=$_GET["Ministerio"];
	$sql="DELETE FROM inministerio WHERE idintegrante = '$cedula' AND idministerio = '$Ministerio'";
	$res=mysql_query($sql,$conn);	
	mysql_close($conn);
	echo "El registro fue eliminado correctamente.";
	echo "<a href='#' onClick='javascript:window.close();'>Regresar</a>"
?>