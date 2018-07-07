<?php
	if($_GET['cc']!=""){
	require_once("conexion.php");
	mysql_set_charset('utf8');
	$ced=trim($_GET['cc']);
	$sqlc="select * from integrante where idintegrante='$ced'";
	$res=mysql_query($sqlc,$conn);
	$campo=mysql_fetch_array($res);
	if($campo['nombres']==""){
		?>
		<script type='text/javascript'>	
		alert('Integrante no registrado.');
		</script>
		<?php
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<!-- Aqui estaba el Script de JavaScrip -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> JdeF Registro de Integrantes</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
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
                    
                           <p align="center"><strong><em>Gestión de Integrantes</em></strong></p>
		      </blockquote>
                                         <form id="form1" method="post" action="">
				  <table width="855" border="1">
				    <tr>
				    <td width="138">Identificación:</td>
				      <?php
					  	if ($ced == ""){
					  		echo "<td width='0'><input name='cedula' type='number' id='cedula'></td>";
						}else{
							echo "<td width='0'><input name='cedula' type='number' value='$ced' id='cedula'></td>";
						}
					  ?> 
					  
					  </td>
                             <td width="144">Nombres:</td>
                            <td width="100"><input name="nombres" type="text" id="nombres" value="<?php echo $campo['nombres'] ?>" size="20"maxlength="20"  /></td>
							 <td >Apellidos:</td>
                            <td width="142"><input name="apellidos" type="text" id="apellidos" value="<?php echo $campo['apellidos'] ?>" size="20"maxlength="20"  /></td>
                          </tr>
                             <tr>
                               <td>F. Nacimiento:</td>
                               <td><span style="text-align:center;">
                                 <input name="fna" type="date" id="fna" value="<?php echo $campo['fnacimiento'] ?>" size="15"maxlength="15"  /></td>
                               
                               <td>Dirección:</td>
                               <td width="150"><input name="dir" type="text" id="dir"value="<?php echo $campo['direccion']?>"  /></td>
							    <td>Barrio:</td>
                               <td width="141"><input name="bar" type="text" id="bar"value="<?php echo $campo['barrio']?>" size="15"maxlength="15"  /></td>
                             </tr>
         
							  <tr>
                               <td>Tel. Residencia:</td>
                               <td><div align="left"><span style="text-align:center;">
                                 <input type="number" name="telper" id="telper" value="<?php echo $campo['telresidecia'] ?>"size="15"maxlength="15"  /></td>
                               
                               <td>Tel. Celular:</td>
                               <td><span style="text-align:center;">
                         <input type="number" name="telmov" id="telmov" value="<?php echo $campo['telcelular'] ?>"size="15"maxlength="15" /></td>
    <td>E-mail:</td>
                               <td width="141"><span style="text-align:center;">
<input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="email" id="email" value="<?php echo $campo['email'] ?>"size="20"maxlength="20" />                     
                   </tr>
				    <tr>
                               <td>Nivel Estudio:</td>
                               <td><div align="left"><span style="text-align:center;">
                                 <input type="text" name="ne" id="ne" value="<?php echo $campo['nivele'] ?>"size="15"maxlength="15"  /></td>
                               
                               <td>Actividad:</td>
                               <td><span style="text-align:center;">
                         <input type="text" name="ac" id="ac" value="<?php echo $campo['actividad'] ?>"size="15"maxlength="15" /></td>
    <td>Profesión:</td>
                               <td width="141"><span style="text-align:center;">
                         <input type="text" name="pr" id="pr" value="<?php echo $campo['profesion'] ?>"size="20"maxlength="20" />                     
                   </tr>
				   
				    <tr>
                               <td>Est. Civil:</td>
 <td> <input list="ecivil" name="ecivil" value="<?php echo $campo['ecivil'] ?>" size="15"maxlength="15" />
 <datalist id="ecivil">
 <option value="Casado">
 <option value="Soltero">
 <option value="Viudo">
 <option value="Divorciado">
</datalist>
</td>
                               <td>No. Hijos:</td>
                               <td><span style="text-align:center;">
                         <input type="number" name="nh" id="nh" value="<?php echo $campo['nhijos'] ?>"size="15"maxlength="15" /></td>
    <td>Grupo C:</td>
                               <td width="141"><span style="text-align:center;">
                         <input type="number" name="grupoc" id="grupoc" value="<?php echo $campo['grupoc'] ?>"size="20"maxlength="20" />                     
                   </tr>
				   <td>Activo Gpo:</td>
 <td> <input list="ag" name="ag" value="<?php echo $campo['activog'] ?>" size="15"maxlength="15" />
<datalist id="ag">
 <option value="Si">
 <option value="No">
</datalist>
</td>						   
                               <td>F. Ingreso:</td>
                               <td><span style="text-align:center;">
                         <input type="date" name="fi" id="fi" value="<?php echo $campo['fingreso'] ?>"size="15"maxlength="15" /></td>
    <td>Bautizado:</td>
	 <td> <input list="bau" name="bau" value="<?php echo $campo['bautizado'] ?>" size="15"maxlength="15" />
<datalist id="bau">
 <option value="Si">
 <option value="No">
</datalist>
</td>                    
               </tr>
				
				   <td>F. Bautizo:</td>
                               <td><div align="left"><span style="text-align:center;">
                                 <input type="date" name="fbau" id="fbau" value="<?php echo $campo['fbautizo'] ?>"size="15"maxlength="15"  /></td>
                               
                               <td>E. formación:</td>
 <td> <input list="efor" name="efor" value="<?php echo $campo['eformacion'] ?>" size="15"maxlength="15" />
<datalist id="efor">
 <option value="Si">
 <option value="No">
</datalist>
</td>                
    <td>Es Líder:</td>
	
<td> <input list="esli" name="esli" value="<?php echo $campo['eslider'] ?>" size="15"maxlength="15" />
<datalist id="esli">
 <option value="Si">
 <option value="No">
</datalist>
</td>              
                   </tr>
				 <td>Líder Act:</td>
<td> <input list="lidera" name="lidera" value="<?php echo $campo['eslider'] ?>" size="15"maxlength="15" />
<datalist id="lidera">
 <option value="Si">
 <option value="No">
</datalist>
</td> 
                               <td>A. Conversión:</td>
                               <td><span style="text-align:center;">
   <input type="text" name="acon" id="acon" value="<?php echo $campo['aconversion'] ?>"size="15"maxlength="15" /></td>
    <td>Función:</td>
	<td> <input list="fun" name="fun" value="<?php echo $campo['funcion'] ?>" size="15"maxlength="15" />
<datalist id="fun">
 <option value="Integrante">
 <option value="Líder">
  <option value="Pastor">
</datalist>
</td> 
                   </tr>      
                   <tr>
				      <td colspan="6" style="text-align:center;"><input type="button" name="Submit" id="button2" value="Consultar" onClick="consultarIntegrante();" />
	 <input type="button" name="btnGrabar" id="btnGrabar" value="Grabar" onClick="validarFormIntegrante1();" /> 
	<input type="button" name="button" id="button" onClick="validarFormIntegrante();" value="Actualizar">
 <input type="button" name="button3" id="button3" value="Cancelar" onClick="limpiarIntegrante();"/>
  <input type="button" name="button4" id="button4" value="Borrar" onClick="borrarIntegrante();"/>
<input type="button" name="btnMCarga" id="btnMCarga" value="Ministerios" onClick="mostrarMinisterio('<?php echo $ced?>');" /> 
				      </label></td>
			        </tr>
			      </table>
				  <label for="JdeF"></label>
</form>
<div id="dListado" align="center" style="border: 1pt solid #fbb; text-align: center; width:855px">
	Ministerios Disponibles
      <table border="1" align="center" cellpadding="0" cellspacing="0" width="100%" >
      
		<?php  												
							require_once("conexion.php");
							$sql="SELECT * from ministerio
							WHERE idministerio not in (Select idministerio from inministerio where idintegrante ='$ced')
							ORDER BY idministerio";
							$res=mysql_query($sql,$conn) or die ('No se pudieron obtener datos');
							echo "<td BGCOLOR=yellow;>".'Ministerio'."</td>"."<br>";
							echo "<td BGCOLOR=yellow;>".'Nombre Ministerio'."</td>";	
							echo "<td BGCOLOR=yellow;>".'Registrar'."</td>";
							while ($fila=mysql_fetch_array($res))
							{
							echo "<tr>";							
							echo "<td align=left>".$fila['idministerio']."</td>";
							echo "<td align=left>".$fila['nombreministerio']."</td>";
echo "<td><input type='image' name='grabar'  src='images/Save.png' onclick='matricularMin(\"".$fila["idministerio"]."\",\"".$campo['nombres']."\",\"$ced\");'/></td>";
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
