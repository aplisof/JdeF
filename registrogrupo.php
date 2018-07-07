<?php
	if($_GET['ig']!=""){
	require_once("conexion.php");
	mysql_query("SET NAMES 'utf8'");
	$ced=trim($_GET['ig']);
	$sqlc="select * from grupoc where idgrupo='$ced'";
	$res=mysql_query($sqlc,$conn);
	$campo=mysql_fetch_array($res);
	if($campo['nombreg']==""){
		?>
		<script type='text/javascript'>	
		alert('Grupo no registrado.');
		</script>
		<?php
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<!-- Aqui estaba el Script de JavaScrip -->

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> JdeF Registro de Grupos</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="scriptJdeF.js"></script>
</head>
<body onLoad="cargaInicial()">
<div id="art-page-background-glare">
        <div id="art-page-background-glare-image">
    <div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                 <div class="art-sheet-body"><img src="images/JDFD1.png" width="880" height="80" />
              <div class="art-nav">
                <ul class="    ">
                  <p><img src="images/NB.png" width="880" height="20" /></p>
                </ul>
                </div> 
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                          <div class="art-vmenublock">
                            <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                    
                           <p align="center"><strong><em>Gestión de Grupo de Conexión</em></strong></p>
		      </blockquote>
                                         <form id="form1" method="post" action="">
				  <table width="855" border="1">
				    <tr>
				    <td width="155">Id Grupo</td>
				      <?php
					  	if ($ced == ""){
					  		echo "<td width='100'><input name='cedula' type='text' id='cedula'></td>";
						}else{
							echo "<td width='100'><input name='cedula' type='text' value='$ced' id='cedula'></td>";
						}
					  ?>
                             <td width="200">Nombre Grupo:</td>
                            <td width="238"><input name="nombreg" type="text" id="nombreg" value="<?php echo $campo['nombreg'] ?>" size="30"maxlength="30"  /></td>
                          </tr>
                             <tr>
                               <td>Id. Líder Principal:</td>
                               <td><span style="text-align:center;">
                                 <input name="idlp" type="text" id="idlp" value="<?php echo $campo['idliderp'] ?>" maxlength="15" />
                               </span></td>
                               <td>Nombre Líder Principal:</td>
                               <td width="234"><input name="nombrelp" type="text" id="nombrelp"value="<?php echo $campo['nombreliderp']?>" size="30"maxlength="30"  /></td>
                             </tr>
                            <!-- <tr>
                               <td>Id. Líder Secundario:</td>
                               <td><input name="idls" type="text" id="idls" value="<?php echo $campo['idliders'] ?>" size="30"maxlength="30" /></td>
                               <td>Nombre Líder Secundario:</td>
                               <td><input name="nombrels" type="text" id="nombrels"value="<?php echo $campo['nombreliders'] ?>" size="30"maxlength="30" /></td>
                             </tr> -->
							  <tr>
                               <td>Id. Líder Secundario:</td>
                               <td><div align="left"><span style="text-align:center;">
                                 <input type="text" name="telper" id="telper" value="<?php echo $campo['idliders'] ?>"maxlength="15"/>
                               </span></div></td>
                               <td>Nombre Líder Secundario:</td>
                               <td><span style="text-align:center;">
                         <input type="text" name="telmov" id="telmov" value="<?php echo $campo['nombreliders'] ?>"size="30"maxlength="30" />
                        
                   </tr>
                   <tr>
				      <td colspan="6" style="text-align:center;"><input type="button" name="Submit" id="button2" value="Consultar" onClick="consultarGrupo();" />
	 <input type="button" name="btnGrabar" id="btnGrabar" value="Grabar" onClick="validarFormGrupo1();" /> 
	<input type="button" name="button" id="button" onClick="validarFormGrupo();" value="Actualizar">
	
                       <!-- <input type="button" name="listarLabs" id="listarLabs" onClick="listarLabos();" value="Listar laboratorios"> -->		
						
						
				        <input type="button" name="button3" id="button3" value="Cancelar" onClick="limpiar();"/>
<input type="button" name="btnMCarga" id="btnMCarga" value="Gestión Reunión" onClick="mostrarReunion('<?php echo $ced?>');" />
				      </label></td>
			        </tr>
				    
			      </table>
				  <label for="cead"></label>
</form>
<div id="dListado" align="center" style="border: 1pt solid #fbb; text-align: center; width:855px">
	Reuniones Programadas 
      <table border="1" align="center" cellpadding="0" cellspacing="0" width="100%" >
      
		<?php  												
							require_once("conexion.php");
							$sql="SELECT * from reunion where idgrupo ='$ced'";
							$res=mysql_query($sql,$conn) or die ('No se pudieron obtener datos');
							echo "<td BGCOLOR=yellow;>".'Reunión'."</td>"."<br>";
							//echo "<td BGCOLOR=yellow;> <b>".'Día'." </b> </td>";
							echo "<td BGCOLOR=yellow;>".'Día'."</td>";	
							echo "<td BGCOLOR=yellow;>".'Hora'."</td>";	
							echo "<td BGCOLOR=yellow;>".'Nombre Anfitrión'."</td>";
							echo "<td BGCOLOR=yellow;>".'Dirección'."</td>";
							echo "<td BGCOLOR=yellow;>".'Telefono'."</td>";						
							//echo "<td BGCOLOR=Black; >".'Ver sesiones'."</td>";
							//echo "<td BGCOLOR=Black; >".'Matricular'."</td>";
							//echo "<td BGCOLOR=Black; >".'Mostrar Carga'."</td>";
							while ($fila=mysql_fetch_array($res))
							{
							echo "<tr>";							
							echo "<td align=left>".$fila['desreunion']."</td>";
							echo "<td align=left>".$fila['diareunion']."</td>";
							echo "<td align=right>".$fila['hreunion']."</td>";
							echo "<td align=left>".$fila['nombreanfitrion']."</td>";
							echo "<td align=left>".$fila['direccion']."</td>";
							echo "<td align=left>".$fila['telefono']."</td>";
//echo "<td><input type='image' name='buscar'  src='images/Search.png' onclick='mostrarCurso(\"".$fila["grupo"]."\",\"".$fila["codcurso"]."\");'/></td>";
//echo "<td><input type='image' name='grabar'  src='images/Save.png' onclick='matricular(\"".$fila["grupo"]."\",\"".$fila["codcurso"]."\",\"$ced\");'/></td>";
							echo '</tr>';
							}
							mysql_close($conn);
		?>
	  </table>
</div>                                 
                                          <div class="art-postcontent">
                                            
                                        <div class="cleared"></div>
                                              <div class="art-content-layout overview-table">
                                              	<div class="art-content-layout-row">
                                              		<div class="art-layout-cell"></div><!-- end cell -->
                                              		<div class="art-layout-cell"></div><!-- end cell -->
                                              		<div class="art-layout-cell"></div><!-- end cell -->
                                              	</div><!-- end row -->
                                              </div><!-- end table -->
                                                  
                            </div>
                                          <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                          </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div>
                <div class="art-footer">
                <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                      <div class="art-footer-text">
                        <hr />
                       <p>Copyright &copy; 2017. All Rights Reserved.</p> 
					    <p>Diseño y Desarrollo Marco Antonio López. </p> 
						<tr>
				      <td colspan="6" align="center"><hr /></td>
				      </tr> 
                      </div>
                		<div class="cleared"></div>
                    </div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
</div>
        </div>
    </div>
</body>
</html>
