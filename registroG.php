<?php
	//$cedula=$_GET["cedula"];	
	if($_GET['cc']!=""){
	require_once("conexion.php");
	$ced=trim($_GET['cc']);
	$sqlc="select * from estudiante where identificacion='$ced'";
	$res=mysql_query($sqlc,$conn);
	$campo=mysql_fetch_array($res);
	if($campo['nombres']==""){
		?>
		<script type='text/javascript'>	
		alert('Usuario No Registrado, Contactar el Administrador.');
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
    <title> Laboratorios Registro </title>

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
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-center">
                        <div class="art-header-png"></div>
                    </div>
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="#">Gestión de Laboratorios</a></h1>
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		Atención Señor Usuario, Tenga en cuenta que debe Actualizar Datos, Registrar los teléfonos y Guardar para ver su Oferta de Laboratorios
                	</ul>
                </div> 
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                          <div class="art-vmenublock">
                              <div class="art-vmenublock-body">
             
                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                    
                           <p align="center"><strong><em>Estudiante</em></strong></p>
		      </blockquote>
                                         <form id="form1" method="post" action="">
				  <table width="855" border="1">
				    <tr>
				    <td width="63">Cedula</td>
				      <?php
					  	if ($ced == ""){
					  		echo "<td width='100'><input name='cedula' type='text' id='cedula'></td>";
						}else{
							echo "<td width='100'><input name='cedula' type='text' value='$ced' id='cedula'></td>";
						}
					  ?>
                             <td width="63">Cead:</td>
                               <td width="252"><input name="cead" type="text" id="cead" value="<?php echo $campo['nomcead'] ?>"maxlength="15" /></td>
                             </tr>
                             <tr>
                               <td>Nombres:</td>
                               <td><span style="text-align:center;">
                                 <input name="nombre" type="text" id="nombre" value="<?php echo $campo['nombres'] ?>" size="30"maxlength="30" />
                               </span></td>
                               <td>Apellidos:</td>
                               <td><input name="apellido" type="text" id="apellido"value="<?php echo $campo['apellido1'].' '.$campo['apellido2']?>" size="30"maxlength="30"  /></td>
                             </tr>
                             <tr>
                               <td>Email Inst:</td>
                               <td><input name="email" type="text" id="email" value="<?php echo $campo['correoinstitucional'] ?>" size="30"maxlength="30" /></td>
                               <td>Email Per:</td>
                               <td><input name="emailp" type="text" id="emailp"value="<?php echo $campo['correopersonal'] ?>" size="30"maxlength="30" /></td>
                             </tr>
                             <tr>
                               <td>Tel Pers:</td>
                               <td><div align="left"><span style="text-align:center;">
                                 <input type="text" name="telper" id="telper" value="<?php echo $campo['telfijo'] ?>"maxlength="10"/>
                               </span></div></td>
                               <td>Tel Movil:</td>
                               <td><span style="text-align:center;">
                                 <input type="text" name="telmov" id="telmov" value="<?php echo $campo['telmovil'] ?>"maxlength="10" />
                        
                   </tr>
                   <tr>
				      <td colspan="6" style="text-align:center;"><input type="button" name="Submit" id="button2" value="Consultar" onClick="consultar();" />
				      
				        <input type="button" name="button" id="button" onClick="validarForm();" value="Guardar">
	
                       <!-- <input type="button" name="listarLabs" id="listarLabs" onClick="listarLabos();" value="Listar laboratorios"> -->		
						
						
				        <input type="button" name="button3" id="button3" value="Cancelar" onClick="limpiar();"/>
<input type="button" name="btnMCarga" id="btnMCarga" value="Mostrar Carga" onClick="mostrarCarga('<?php echo $ced?>');" />
				      </label></td>
			        </tr>
				    
			      </table>
				  <label for="cead"></label>
</form>
<div id="dListado" align="center" style="border: 1pt solid #fbb; text-align: center; width:855px">
	Laboratorios Disponibles 
      <table border="1" align="center" cellpadding="0" cellspacing="0" width="100%">
      
		<?php 												
							require_once("conexion.php");
							$sql="SELECT distinct(B.grupo), A.codcurso,A.nomcurso 
							FROM estudiante A, laboratorio B 
							WHERE A.codcurso=B.codcurso 
							AND A.identificacion='$ced'
							AND B.capacidad>0
							AND A.codcurso not in (Select codcurso from labestudiante where identificacion ='$ced')
							ORDER BY A.nomcurso,B.grupo";
							$res=mysql_query($sql,$conn) or die ('No se pudieron obtener datos');
							echo "<td BGCOLOR=Black;>".'Código'."</td>"."<br>";
							echo "<td BGCOLOR=Black;>".'Nombre Curso - Laboratorio'."</td>";
							echo "<td BGCOLOR=Black;>".'Grupo'."</td>";							
							echo "<td BGCOLOR=Black; >".'Ver sesiones'."</td>";
							echo "<td BGCOLOR=Black; >".'Matricular'."</td>";
							//echo "<td BGCOLOR=Black; >".'Mostrar Carga'."</td>";
							while ($fila=mysql_fetch_array($res))
							{
							echo "<tr>";							
							echo "<td>".$fila['codcurso']."</td>";
							echo "<td>".$fila['nomcurso']."</td>";
							echo "<td>".$fila['grupo']."</td>";
							echo "<td><input type='image' name='buscar'  src='images/Search.png' onclick='mostrarCurso(\"".$fila["grupo"]."\",\"".$fila["codcurso"]."\");'/></td>";
							echo "<td><input type='image' name='grabar'  src='images/Save.png' onclick='matricular(\"".$fila["grupo"]."\",\"".$fila["codcurso"]."\",\"$ced\");'/></td>";
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
                          <div class="art-post">
                              <div class="art-post-body">
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
                       <p>Copyright &copy; 2013. All Rights Reserved.</p> 
					    <p>Diseño y Desarrollo Ings. Jorge Alberto Correa y Marco Antonio López. Cead Medellín</p> 
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
