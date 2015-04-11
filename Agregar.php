<?php 
/*
*
*
*
*
*
*/
$correo=$_GET['email'];
$estado=$_GET['estado'];
$nombre=$_GET['nombre'];
$telefono=$_GET['telefono'];
$apellidos=$_GET['apellidos'];

//Verifica si la variable correo existe.
if(isset($correo))
{
	//Establece la conexion a la base de datos y realiza la consulta para poder agregar al usuario.
    include("conexion.php");
	$sql="INSERT INTO clientes (id,estado_id,nombre,apellidos,telefono,email) VALUES ('','$estado','$nombre','$apellidos','$telefono','$correo')";
	
	$resultado=mysql_query($sql);
	
	echo "Usuario agregado <br>";
	echo "<a href= 'Administracion.php' >Ver Lista </a> ";

}else{
echo "Ocurrio un error al registrar, intente de nuevo por favor.";
}
?>