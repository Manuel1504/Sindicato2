<?php 
/*
*
*
*
*
*
*/
 include('conexion.php');


?>


<!DOCTYPE html>
<head>
	<title>Agregar usuario</title> 
</head>
<body>
<form action='Agregar.php' method='GET'> 
<p><b>Correo electronico:</b><br /><input type='text' name='email'  /> 
<p><b>Nombre:</b><br /><input type='text' name='nombre' /> 
<p><b>Apellidos:</b><br /><input type='text' name='apellidos'  /> 
<p><b>Telefono:</b><br /><input type='text' name='telefono'  /> 
	<p><b>Estado:</b><br />
	<select id="estado" name="estado">
		<option value="1">Aguascalientes</option>
	    <option value="2">Baja California</option>
		<option value="3">Baja Calififornia sur</option>
		<option value="4">Campeche</option>
		<option value="5">Chiapas</option>
		<option value="6">Chihuahua</option>
		<option value="7">Coahuila</option>
		<option value="8">Colima</option>
		<option value="9">Distrito Federal</option>
		<option value="10">Durango</option>
		<option value="11">Guanajuato</option>
		<option value="12">Guerrero</option>
		<option value="13">Hidalgo</option>
		<option value="14">Jalisco</option>
		<option value="15">Mexico</option>
		<option value="16">Michoacan</option>
		<option value="17">Morelos</option>
		<option value="18">Nayarit</option>
		<option value="19">Nuevo Leon</option>
		<option value="20">Oaxaca</option>
		<option value="21">Puebla</option>
		<option value="22">Queretaro</option>
		<option value="23">Quintana Roo</option>
		<option value="24">San Luis Potosi</option>
		<option value="25">Sinaloa</option>
	</select>
<p><input type='submit' value='Agregar' /><input type='hidden' value='1' name='submitted' />
	<a href="Administracion.php"><input type="button" value="Regresar"/></a>
</form> 
</body>
</html> 