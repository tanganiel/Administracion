<html>
	<head>
		<title>Mantenedor de Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/mi_style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<script src="jquery/jquery-1.8.3.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/mi_javascript.js"></script>
		<?php
	
			$conn = mysql_connect("localhost:3306","root","Trovador")
				or die ("No se pudo conectar!");
					
			$bd = mysql_select_db("Usuarios", $conn)
				or die ("La base de datos no existe!");
					//echo("SI");
			
			$resultado = mysql_query("select * from usuario;");
      		?>

	</head>
	<body align="center">
		<center>
		<form name="formulario" method="post" action="manejo_de_datos.php" onSubmit = "return valida_formulario(this);">
			<div class="cuerpo_formulario">
				<h1><div class="titulo_formulario">Mantenci&oacute;n de Usuarios</div></h1>
				
				<div class="linea">
				<div class="campo">Rut:</div>
				<div class="texto_ingreso"><input type="text" id="txtRut" name="txtRut" placeholder="Rut" maxlength="10"/></div>
				</div>
				
				<div class="linea">
				<div class="campo">Nombre:</div>
				<div class="texto_ingreso"><input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" maxlength="50"/></div>
				</div>

				<div class="linea">
				<div class="campo">Apellido Paterno:</div>
				<div class="texto_ingreso"><input type="text" id="txtApellidoPaterno" name="txtApellidoPaterno" placeholder="Apellido Paterno" maxlength="50"/></div>
				</div>
				
				<div class="linea">
				<div class="campo">Apellido Materno:</div>
				<div class="texto_ingreso"><input type="text" id="txtApellidoMaterno" name="txtApellidoMaterno" placeholder="Apellido Materno" maxlength="50"/></div>
				</div>
				
				<div class="linea">
				<div class="campo">Edad:</div>
				<div class="texto_ingreso">
					<select name="cmbEdad" id="cmbEdad">
						<?php
							for ($i = 5 ; $i <= 90 ; $i++)
							{
								echo("<option value='$i'>$i Años</option>");
							}
						?>
					</select>
				</div>
				</div>
		
				<div class="linea">
				<div class="campo">Direcci&oacute;n:</div>
				<div class="texto_ingreso"><input type="text" id="txtDireccion" name="txtDireccion" placeholder="Dirección" maxlength="100"/></div>
				</div>

				<div class="linea">
				<div class="campo">Comuna:</div>
				<div class="texto_ingreso"><input type="text" id="txtComuna" name="txtComuna" placeholder="Comuna" maxlength="50"/></div>
				</div>

				<div class="linea">
				<div class="campo">Ciudad:</div>
				<div class="texto_ingreso"><input type="text" id="txtCiudad" name="txtCiudad" placeholder="Ciudad" maxlength="50"/></div>
				</div>

				<div class="linea">
				<div class="campo">Pais:</div>
				<div class="texto_ingreso"><input type="text" id="txtPais" name="txtPais" placeholder="Pais" maxlength="50"/></div>
				</div>

				<div class="linea">
				<div class="campo">Telefono:</div>
				<div class="texto_ingreso"><input type="text" id="txtTelefono" name="txtTelefono" placeholder="Telefono" maxlength="20"/></div>
				</div>

				<div class="ubicacion_boton">
				<input type="submit" class="btn btn-success btn-large" id="btn" value="Ingresar" name="btn" onclick="javascript:valida_ingreso(this);"/>
				<div class="espacio_submit"></div>
				<input type="submit" class="btn btn-warning btn-large" id="btn" value="Actualizar" name="btn" onclick="javascript:valida_ingreso(this);" />
				</div>
			</div>
		</form>
		</br>
		<hr/>
	<?php
		if (0 != mysql_num_rows($resultado))
		{
		echo("<h1><p align='center'>Tabla de Datos de Usuarios</p></h1>
		</br>
		<table border='1' class='table-condensed table-hover table-striped'>
		<tr bgcolor='#242E70'>
			<td><font color='#20950E'>Rut:</font></td>
			<td><font color='#20950E'>Nombre:</font></td>
			<td><font color='#20950E'>Apellido Paterno:</font></td>
			<td><font color='#20950E'>Apellido Materno:</font></td>
			<td><font color='#20950E'>Edad:</font></td>
			<td><font color='#20950E'>Direcci&oacute;n:</font></td>
			<td><font color='#20950E'>Comuna:</font></td>
			<td><font color='#20950E'>Ciudad:</font></td>
			<td><font color='#20950E'>Pais:</font></td>
			<td><font color='#20950E'>Tel&eacute;fono:</font></td>
			<td><font color='#20950E'>Opci&oacute;n:</font></td>
		</tr>");
		
		while($row = mysql_fetch_array($resultado))
		{
			echo("<tr>
			<td><font color='gray'> $row[rut] </font></td>
			<td><font color='gray'> $row[nombre] </font></td>
			<td><font color='gray'> $row[apellidoPaterno] </font></td> 
			<td><font color='gray'> $row[apellidoMaterno] </font></td>
			<td><font color='gray'> $row[edad] Años </font></td>
			<td><font color='gray'> $row[direccion] </font></td>
			<td><font color='gray'> $row[comuna] </font></td> 
			<td><font color='gray'> $row[ciudad]</font></td>
			<td><font color='gray'> $row[pais] </font></td>
			<td><font color='gray'>$row[telefono] </font></td>
			<td>
			<form name='formulario' method='post' action='manejo_de_datos.php'>
			<input type='hidden' name='txtRut' value='$row[rut]'/>
			<input type='submit' class='btn btn-danger btn-mini' id='btn' value='Eliminar' name='btn' /></td>
			</form></td>
			</tr>");
		}
		mysql_close($conn);
		echo("</table>");
		}
	?>
	</center>
	</body>
</html>