
 <?php $grupo =$_GET["grupo"]; ?>
 <?php
	if($_GET['ir']!=""){
	require_once("conexion.php");
	mysql_query("SET NAMES 'utf8'");
	$ced=trim($_GET['ir']);
	$sqlc="select * from reunion where idreunion='$ced' AND idgrupo=11";
	//$sqlc="select * from reunion where idgrupo='$ced'";
	$res=mysql_query($sqlc,$conn);
	$campo=mysql_fetch_array($res);
	if($campo['desreunion']==""){
		?>
		<script type='text/javascript'>	
		alert('Reunión no registrada.');
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
    <title> JdeF Registro de Reuniones</title>

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
							 
   <p align="center"><strong><em>Gestión Reuniones del Grupo: <?php echo $grupo?></em></strong></p>
		                   </blockquote>
                                         <form id="form1" method="post" action="">
				  <table width="855" border="1">
				    <tr>
				    <td width="155">Id Reunión</td>
				      <?php
					  	if ($ced == ""){
					  		echo "<td width='100'><input name='cedula' type='number' id='cedula'></td>";
						}else{
							echo "<td width='100'><input name='cedula' type='number' value='$ced' id='cedula'></td>";
						}
					  ?>
                              <td width="103">Descripción:</td>
 <td width="176"><input name="desre" type="text" id="desre" value="<?php echo $campo['desreunion'] ?>" size="20"maxlength="20"  /></td>
 <td width="79">Tipo:</td>
 <td width="209"><input name="treun" type="text" id="treun" value="<?php echo $campo['tiporeunion'] ?>" size="15"maxlength="15"  /></td>
                          </tr>
                             <tr>
                               <td>Id. Anfitrión:</td>
                               <td><span style="text-align:center;">
    <input name="idan" type="number" id="idan" value="<?php echo $campo['idanfitrion'] ?>" size="15"maxlength="15" />
                               </span></td>
                               <td>Nombre:</td>
<td width="176"><input name="noman" type="text" id="noman"value="<?php echo $campo['nombreanfitrion']?>" size="20"maxlength="20"  /></td>
							    <td>Dirección:</td>
<td width="209"><input name="dir" type="text" id="dir"value="<?php echo $campo['direccion']?>" size="30"maxlength="30"  /></td>
                             </tr>
                             <tr>
							 <td>Telefono:</td>
                               <td><input name="tel" type="number"  pattern="[0-9]{9} id="tel" value="<?php echo $campo['telefono'] ?>" size="10"maxlength="10" /></td>
<td>Día Reunión:</td>
 <td> <input list="diar" name="diar" value="<?php echo $campo['diareunion'] ?>" size="15"maxlength="15" />
 <datalist id="diar">
 <option value="Lunes">
 <option value="Martes">
 <option value="Miercoles">
 <option value="Jueves">
 <option value="Viernes">
 <option value="Sabado">
 <option value="Domingo">
</datalist>
</td>

<!-- <td><input name="diar" type="text" id="diar" value="<?php echo $campo['diareunion'] ?>" size="15"maxlength="15" /></td> -->

<!--
 <td><select name="diar" id="diar" type="select" value="<?php echo $campo['diareunion'] ?>"
"10"maxlength="10" /> 
<option>Seleccionar</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miércoles">Miércoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Jueves">Viernes</option>
  <option value="Jueves">Sábado</option>
  <option value="Domingo">Domingo</option>
                                 </select> -->
                               
<td>Hora:</td>
<td><input name="hreu" type="time" id="hreu"value="<?php echo $campo['hreunion'] ?>" size="10"maxlength="10" /> </td>
                             </tr>
                            
                   <tr>
				      <td colspan="6" style="text-align:center;">
<tr>
                        
                   </tr>
                   <tr>
<td colspan="10" align="center"><input type="button" value="Regresar" onClick="regresarGrupo('<?php echo $grupo ?>');">			
<input type="button" name="Submit" id="button2" value="Consultar" onClick="consultarR();" />
	 <input type="button" name="btnGrabar" id="btnGrabar" value="Grabar" onClick="validarFormReunion1();" /> 
	<input type="button" name="button" id="button" onClick="validarFormReunion();" value="Actualizar">			
 <input type="button" name="button3" id="button3" value="Cancelar" onClick="limpiarR();"/>

				      </label></td>
			        </tr>
				    
			      </table>
				  <label for="cead"></label>
</form>

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
