<?php
	require_once("conexion.php");
	$codigo = $_GET["cedula"];
	$sql="select id from inministerio where idintegrante = '$codigo'";
	$res=mysql_query($sql,$conn);	
	$fila=mysql_fetch_array($res);
	
	if ($fila['id'] == ""){
	$sql="DELETE FROM integrante WHERE idintegrante = '$codigo' ";
	echo $sql;
	$res=mysql_query($sql,$conn);	
	mysql_close($conn);
	echo "El registro fue eliminado correctamente.";
	echo "<html>
	<head>
	<META HTTP-EQUIV='Refresh' CONTENT='0; URL=registrointegrante.php'>
	</head>
	</html>
	";	
	}else{
		echo "<div align='left'>";
		echo "El Integrante tiene asociados ministerios, debe borrarlos primero.<br>";
		echo "</div>";
		//sleep(10);
		echo "
		<META HTTP-EQUIV='Refresh' CONTENT='2; URL=registrointegrante.php?cc=$codigo'>
		</head>
	</html>
	";		
	}	
?>