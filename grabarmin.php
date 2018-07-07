<?php

	require_once("conexion.php");
	
	$cedula = $_GET["cedula"];
	$nombre=$_GET["Nombre"];
	$Ministerio = $_GET["Ministerio"];
	
	$sql="select id from inministerio where (idministerio = $Ministerio) and (idintegrante = '$cedula')";
	$res=mysql_query($sql,$conn);	
	
	$fila=mysql_fetch_array($res);
	
	if ($fila['id'] == ""){
		$sql = "INSERT INTO inministerio VALUES('',".$Ministerio.",".$cedula.")";
		$res=mysql_query($sql,$conn);	
		mysql_close($conn);
		
		echo "<div align='left'>";
		echo "El ministerio $Ministerio fue matriculado correctamente al integrante  $nombre.<br>";
		echo "
			<a href='registrointegrante.php?cc=$cedula''>Regresar</a>
		";
		echo "</div>";
	}else{
		echo "<div align='left'>";
		echo "El ministerio $Ministerio ya se encuentra matriculado para el integrante $nombre., Regrese y pulse consultar para que refresque los datos.<br>";
		echo "
			<a href='registrointegrante.php?cc=$cedula''>Regresar</a>
		";
		echo "</div>";
	}	
		
	
	
?>