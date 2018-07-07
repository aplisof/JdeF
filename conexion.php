<?php 
$servidor='localhost';
$usuario='jdef';
$pass='jdef';
$bd='jdef';
$conn=mysql_connect($servidor,$usuario,$pass) or die ('No se pudo establecer la Conexión');
mysql_select_db($bd,$conn) or die ('No se encontro la Base de Datos');
//@mysql_query("SET NAMES 'utf8'"); 
?>