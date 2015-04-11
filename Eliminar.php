<?php
include('conexion.php'); 
$id = (int) $_GET['id']; 
//Se genera la consulta obteniendo el id del usuario para poder ejecutarla.
mysql_query("DELETE FROM `clientes` WHERE `id` = '$id' ") ; 
//Muestra el resultado de los campos afectados.
echo (mysql_affected_rows()) ? "Registro borrado.<br /> " : "Sin cambios.<br/> "; 
?> 

<a href='Administracion.php'><input type="button" value="Volver a la lista"/></a>