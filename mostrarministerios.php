<?php
	require_once("conexion.php");
	$cedula = $_GET["cc"];
	$sql="select A.nombres, A.Apellidos,B.idministerio,B.nombreministerio,C.idintegrante
	from integrante A, ministerio B, inministerio C
	where A.idintegrante=C.idintegrante
	AND   B.idministerio=C.idministerio
	AND C.idintegrante='$cedula'";
	//$sql="select * from inministerio where idintegrante='$cedula'";
	 $res=mysql_query($sql,$conn) or die ('No se pudieron recuperar datos');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> JdeF Ministerios Asignados</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="scriptJdeF.js"></script>
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
							  
                   
                        
		      </blockquote>
			  <form id="form1" method="post" action="">
                                        <table border="1" width="857">
		<tr>
			<td colspan="10" align ="Center">Ministerios Que Tiene Registrados El Integrante: <?php echo $cedula?></td>
			
		</tr>
		<tr>
			
			<td  BGCOLOR=yellow;>  Ministerio</td>
			<td  BGCOLOR=yellow;>Nombre</td>
			<td  BGCOLOR=yellow;>Borrar</td>
			
		</tr>
		<?php
			
			while($fila=mysql_fetch_array($res,MYSQL_ASSOC)){
				echo "<tr>";
				echo "<td>".$fila["idministerio"]."</td>";
				echo "<td>".$fila["nombreministerio"]."</td>";
				echo "<td><input type='image' name='borrar'  src='images/Delete.png' onclick='BorrarMin(\"".$fila["idministerio"]."\",\"".$fila["nombreministerio"]."\",\"$cedula\");'/></td>";
				echo "</tr>";
			}
				mysql_close($conn);
		?>
		<tr>
			<td colspan="10" align="center"><input type="button" value="Regresar" onclick="regresarInt('<?php echo $cedula ?>');">
		<!--	<input type="button" name="button1" id="button1" onClick="exportarCargaPdf('<?php echo $cedula ?>');" value="Exportar PDF">
			<input type="button" name="button" id="button" onClick="enviarCorreo('<?php echo $cedula ?>');" value="Enviar Por E-mail"> -->
			</td>
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
                       <p>Copyright &copy; 2017. All Rights Reserved.</p> 
					    <p>Diseño y Desarrollo Marco Antonio López. </p> 
						<tr>
				      <td colspan="6" align="center"><hr/></td>
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
