<?php
$user=$_POST['usuario'];
$pwd=$_POST['clave'];
$conexion=mysqli_connect("localhost","jdef","jdef","jdef");
$consulta="SELECT * FROM usuario WHERE usuario='$user' AND password='$pwd'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if ($filas>0){
	header("location:admin.php");
}else{
	echo "Error de usuario";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

