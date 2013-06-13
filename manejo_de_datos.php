<html>
<head>
	<title></title>
</head>	
<body>
<?php
	$v_rut = $_POST["txtRut"];
	$v_nombre = $_POST["txtNombre"];
	$v_apellidoP = $_POST["txtApellidoPaterno"];
	$v_apellidoM = $_POST["txtApellidoMaterno"];
	$v_edad = $_POST["cmbEdad"];
	$v_direccion = $_POST["txtDireccion"];
	$v_comuna = $_POST["txtComuna"];
	$v_ciudad = $_POST["txtCiudad"];
	$v_pais = $_POST["txtPais"];
	$v_telefono = $_POST["txtTelefono"];
	$v_btn = $_POST["btn"];


		$conn = mysql_connect("localhost:3306","root","Trovador")
				or die ("No se pudo conectar!");
					
		$bd = mysql_select_db("Usuarios", $conn)
				or die ("La base de datos no existe!");
					//echo("SI");

		switch ($v_btn) 
		{
			case "Ingresar": $filasafectadas = mysql_query("insert into Usuario values 
											('$v_rut',
											'$v_nombre',
											'$v_apellidoP',
											'$v_apellidoM'
											,$v_edad,
											'$v_direccion',
											'$v_comuna',
											'$v_ciudad',
											'$v_pais',
											'$v_telefono');");
			break; 
			case "Actualizar": $filasafectadas = mysql_query("update Usuario set rut = '$v_rut', 														
							nombre ='$v_nombre',
							apellidoPaterno ='$v_apellidoP',
							apellidoMaterno ='$v_apellidoM',
							edad = $v_edad,
							direccion ='$v_direccion',
							comuna = '$v_comuna',
							ciudad = '$v_ciudad',
							pais ='$v_pais',
							telefono ='$v_telefono'
							where rut = '$v_rut';");
			break;
			case "Eliminar": $filasafectadas = mysql_query("delete from usuario where rut = '$v_rut';");
			break;
		}
		header('Location: index.php?');			
?>
</body>
</html>