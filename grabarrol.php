<?php

	require_once("conexion.php");
	
	$cedula = $_GET["cedula"];
	$codCurso = $_GET["codCurso"];
	$codGrupo = $_GET["codGrupo"];
	
	$sql="select id from labestudiante where (identificacion = $cedula) and (codcurso = '$codCurso')";
	$res=mysql_query($sql,$conn);	
	
	$fila=mysql_fetch_array($res);
	
	if ($fila['id'] == ""){
		$sql = "INSERT INTO labestudiante VALUES('',".$cedula.",'".$codCurso."','".$codGrupo."')";
		$res=mysql_query($sql,$conn);	
		$sql = "UPDATE laboratorio set capacidad=capacidad-1 where (grupo = $codGrupo) and (codcurso = '$codCurso')";
		$res=mysql_query($sql,$conn);
		mysql_close($conn);
		
		echo "<div align='center'>";
		echo "El grupo $codGrupo fue matriculado correctamente al estudiante con identificación $cedula.<br>";
		echo "
			<a href='registrolab.php?cc=$cedula''>Regresar</a>
		";
		echo "</div>";
	}else{
		echo "<div align='center'>";
		echo "Este Laboratorio ya se encuentra matriculado, Regrese y pulse consultar para que refresque los datos.<br>";
		echo "
			<a href='registrolab.php?cc=$cedula''>Regresar</a>
		";
		echo "</div>";
	}	
		
	
	
?>