<?php
if($_GET['cc']!=""){
	require_once("file:///C|/xampp/htdocs/Laborzocc/conexion.php");
	$ced=trim($_GET['cc']);
	$sqlc="select * from profesor where identificacion='$ced'";
	$res=mysql_query($sql,$conn) or die ('No pudieron recuperar datos');
	$campo=mysql_fetch_array($res);
	if($campo['nomcurso']==""){
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

    <link rel="stylesheet" href="file:///C|/xampp/htdocs/Laborzocc/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="file:///C|/xampp/htdocs/Laborzocc/jquery.js"></script>
    <script type="text/javascript" src="file:///C|/xampp/htdocs/Laborzocc/script.js"></script>
</head>
<body>
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
                		<li>
                			<a href="file:///C|/xampp/htdocs/Laborzocc/registro.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Registrarse</span></a>
                		</li>
                		<li>
               			<a href="file:///C|/xampp/htdocs/Laborzocc/ingreso.php"><span class="l"></span><span class="r"></span><span class="t">Ingresar</span></a></li>		
                		<li></li>
                	</ul>
                </div> 
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                          <div class="art-vmenublock">
                              <div class="art-vmenublock-body">
                                          <div class="art-vmenublockheader">
                                              
                                              
            <h3 class="t">Moverse A</h3>
                                          </div>
                                          <div class="art-vmenublockcontent">
                                              <div class="art-vmenublockcontent-body">
                                                          <ul class="art-vmenu">
                                                          	<li>
<a href="file:///C|/xampp/htdocs/Laborzocc/index.html"><span class="l"></span><span class="r"></span><span class="t">Inicio</span></a>
                                                          	</li>
<a href=""><span class="l"></span><span class="r"></span><span class="t">Cargar Archivos</span></a>
                                                          	</li>
 <a href=""><span class="l"></span><span class="r"></span><span class="t">Registrar</span></a>
                                                          	</li>                                                     	
                                                          		
<a href=""><span class="l"></span><span class="r"></span><span class="t">Consultar Laboratorios</span></a></li>                                              
                                                         </ul>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader"></div>
                                          <div class="art-blockcontent">
                                    <div class="art-blockcontent-body">
                                                                                               
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader"></div>
                                          <div class="art-blockcontent"></div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">
                              <div class="art-block-body">
                                <div class="art-blockcontent">
            <div class="art-blockcontent-body">
              <div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                    
                           <p><strong><em>Registro de Usuarios</em></strong></p>
		      </blockquote>
                  <form id="form1" method="post" action="file:///C|/xampp/htdocs/Laborzocc/registro_recibe.php">
				  <table  border="0">
				    <tr>
				      <td width="64">Cedula:</td>
				      <td width="120"><label for="cedula"></label>
			          <input name="cedula" type="text" autofocus required id="cedula" value="<?php echo $_GET['cc'] ?>"/></td>
			        </tr>
				    <tr>
				      <td>Nombre:</td>
				      <td><label for="nombre"></label>
			          <input name="nombre" type="text" id="nombre" value="<?php echo $campo['nombre'] ?>" size="40"/></td>
			        </tr>
				    <tr>
				      <td>Usuario:</td>
				      <td><label for="usuario"></label>
			          <input type="text" name="usuario" id="usuario" value="<?php echo $campo['usuario'] ?>" /></td>
			        </tr>
				    <tr>
				      <td>Clave</td>
				      <td><label for="clave"></label>
			          <input type="password" name="clave" id="clave" /></td>
			        </tr>
                    <tr>
				      <td>Confirmar Clave</td>
				      <td><label for="clave"></label>
			          <input type="password" name="clave2" id="clave2" /></td>
			        </tr>
				    <tr>
				      <td colspan="2" align="center">
					<!--  <input type="button" name="button1" id="button1"  value="Consultar" onclick="validar1()"> -->
					   <input type="button" name="Submit" id="button" value="Consultar" onClick="window.location.href='registro.php?cc='+document.getElementById('cedula').value;" /> 
                      <input type="button" name="button" id="button" value="Guardar" <?php if($campo['usuario']!=""){ ?> disabled="disabled" <?php } ?> onClick="validar()" /></td>
			        </tr>
			      </table>
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
