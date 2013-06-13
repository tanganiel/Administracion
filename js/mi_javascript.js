function valida_formulario(formulario)
			{		
					if (formulario.txtRut.value == "")
					{
						alert("Ingrese un Rut de Usuario!");
						formulario.txtRut.focus();
						return false;
					}
				
					if (formulario.txtNombre.value == "")
					{
						alert("Ingrese un Nombre de Usuario!");
						formulario.txtNombre.focus();
						return false;
					}
					
					if (formulario.txtApellidoPaterno.value == "")
					{
						alert("Ingrese un Apellido Paterno de Usuario!");
						formulario.txtApellidoPaterno.focus();
						return false;
					}
					
					if (formulario.txtApellidoMaterno.value == "")
					{
						alert("Ingrese un Apellido Materno de Usuario!");
						formulario.txtApellidoMaterno.focus();
						return false;
					}
					
					if (formulario.txtDireccion.value == "")
					{
						alert("Ingrese una Dirección de Usuario!");
						formulario.txtDireccion.focus();
						return false;
					}
					
					if (formulario.txtComuna.value == "")
					{
						alert("Ingrese una Comuna de Usuario!");
						formulario.txtComuna.focus();
						return false;
					}
					
					if (formulario.txtCiudad.value == "")
					{
						alert("Ingrese una Ciudad de Usuario!");
						formulario.txtCiudad.focus();
						return false;
					}
					
					if (formulario.txtPais.value == "")
					{
						alert("Ingrese una Pais de Usuario!");
						formulario.txtPais.focus();
						return false;
					}
					
					if (formulario.txtTelefono.value == "")
					{
						alert("Ingrese un Telefono de Usuario!");
						formulario.txtTelefono.focus();
						return false;
					}	
			}