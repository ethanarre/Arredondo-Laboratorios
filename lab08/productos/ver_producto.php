<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$IdProducto = $_POST['IdProducto'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Stock = $_POST['Stock'];
$PrecioVenta = $_POST['PrecioVenta'];
$valores = "";

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "SELECT IdProducto, Nombre, Descripcion, Stock, PrecioVenta FROM producto";
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	  $valores = $valores .'<tr>'.
	                         '<td>'.$crow['IdProducto'].'</td>'.
							 '<td>'.$crow['Nombre'].'</td>'.
							 '<td>'.$crow['Descripcion'].'</td>'.
							 '<td>'.$crow['Stock'].'</td>'.
							 '<td>'.$crow['PrecioVenta'].'</td>'.
						   '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $valores;

?>