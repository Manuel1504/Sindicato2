<?php
/*
*
*
*
*
*
*/

include('conexion.php');
if(!isset($_GET['buscas'])){
	//Realiza la consulta para mostrar datos.
	$result = mysql_query("SELECT clientes.id, estados.nombre as 'estado', clientes.nombre, clientes.apellidos, clientes.telefono, clientes.email FROM `clientes` INNER JOIN estados ON clientes.estado_id = estados.id;") or trigger_error(mysql_error()); 


}else{
	$buscar=$_GET['buscar'];
	$busqueda=$_GET['busqueda'];
	if($_GET['busqueda']=='estado_id'){
	$result=mysql_query("SELECT clientes.id, estados.nombre as 'estado', clientes.nombre, clientes.apellidos, clientes.telefono, clientes.email FROM `clientes` INNER JOIN estados ON clientes.estado_id = estados.id AND estados.nombre like '%$buscar%';") or trigger_error(mysql_error());
	} else {
		 $sql="SELECT clientes.id, estados.nombre as 'estado', clientes.nombre, clientes.apellidos, clientes.telefono, clientes.email FROM `clientes` INNER JOIN estados ON clientes.estado_id = estados.id AND $busqueda like '%$buscar%'";
		$result=mysql_query($sql);
	}
	
} 

?>
<!DOCTYPE html>
<head>
<title> Administracion</title>

<meta charset="utf-8">
</head>
<body>

<nav> 
	<form action="Administracion.php" name="buscar_frm" id="buscar_frm" method="get" >
	<label>Elija que en que campo desea realizar la busqueda :</label>
 <select name="busqueda" id="busqueda">
     <option value="clientes.id">Codigo</option>
	 <option value="estado_id">Estado</option>	
	 <option value="clientes.nombre">Nombre</option>
     <option value="clientes.apellidos">Apellidos</option>
	 <option value="clientes.telefono">Telefono</option>	
	 <option value="clientes.email">Correo</option>
		</select><br><br>
		
		
		<label>Introduzca el valor a buscar: </label>
		<input type="search" id="buscar" name="buscar"/><br>
		<input type="submit" id="busca"  name="buscas"value="Buscar" />
		<a href="Nuevo.php"><input type="button" value="Agregar usuario"/> </a><br><br>
		</form>
	
	</nav>
	<section>
	 <table>
	   <thead>
					
	            <tr>
					<td><b>ID<br></b></td>
					<td><b>Estado <br></b></td>
					<td> <b>Nombre</b><br></td>
					<td> <b>Apellidos<br></b></td>
					<td><b>Telefono<br></b></td>
					<td><b>Correo<br></b></td>
					<td>Opciones  </td>
				</tr>
				</thead>
	<tbody>
		<?php //Toma los datos de la consulta realizada y los muestra.
		 while ($row = mysql_fetch_array($result)){?>
		<tr>
		  <td>
			  <?php echo $row['id'];?>
		  </td>	
		
		  <td>
			  <?php echo $row['estado'];?>
		  </td>	
		
		  <td>
			  <?php echo $row['nombre'];?>
		  </td>	
		
		  <td>
			  <?php echo $row['apellidos'];?>
		  </td>	
		
		  <td>
			  <?php echo $row['telefono'];?>
		  </td>	
		
		  <td>
			  <?php echo $row['email'];?>
		  </td>	
		
		  <td>
			 <a href="modificar.php?id=<?php echo $row['id'];?>"><input type="button" id="Modificar" value="Modificar"/></a>
		  </td>	
	
		  <td>
			  <a href="Eliminar.php?id=<?php echo $row['id'];?>"><input type="button" id="Eliminar" value="Eliminar"/></a>
		  </td>	
		</tr>
		<?php } ?>
	</tbody>
	 </table>
	</section>
</body>
</html>