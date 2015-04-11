<?php
/*
*
*
*
*
*
*/
include('conexion.php'); 
if (isset($_GET['id']) ) 
$id = (int) $_GET['id']; 
//Verifca si hubo cambios.
if (isset($_POST['submitted'])) 
{
	//Obtiene el valor de los datos de la ventana modificar.
foreach($_POST AS $key => $value) 
{ $_POST[$key] = mysql_real_escape_string($value); } 
	//Con los valores obtenidos, se adjuntan a la sentencia sql para modificar los datos.
$sql = "UPDATE `clientes` SET  `estado_id` =  '{$_POST['estado']}' ,  `nombre` =  '{$_POST['nombre']}' ,  `apellidos` =  '{$_POST['apellidos']}' , telefono = '{$_POST['telefono']}' ,`email` =  '{$_POST['correo']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
	//Muestra un mensaje si hubo camios o no.
echo (mysql_affected_rows()) ? "Cambios guardados.<br />" : "No hubo cambios. <br />"; 
echo "<a href='Administracion.php'>Volver a la lista</a>"; 
} 
//Obtiene los valores de los datos que van a modificar.
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `clientes` WHERE `id` = '$id' ")); 
?>
<!DOCTYPE html>
<head>
	<title>Editar usuario</title> 
</head>
<body>
<form action='' method='POST'> 
<p><b>Estado:</b><br /><input type='text' name='estado' value="<?php echo $row['estado_id'];?>" /> 
<p><b>Nombre:</b><br /><input type='text' name='nombre' value="<?php echo $row['nombre'];?>"/> 
<p><b>Apellidos:</b><br /><input type='text' name='apellidos' value="<?php echo $row['apellidos'];?>" /> 
	<p><b>Telefono:</b><br /><input type='text' name='telefono' value="<?php echo $row['telefono'];?>" />
<p><b>Correo:</b><br /><input type='text' name='correo' value="<?php echo $row['email'];?>" /> 
<p><input type='submit' value='Hacer cambios' /><input type='hidden' value='1' name='submitted' /> 
	<a href="Administracion.php"><input type="button" value="Regresar"/></a>
</form> 
</body>
</html> 