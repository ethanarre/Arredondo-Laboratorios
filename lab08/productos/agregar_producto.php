<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Stock = $_POST['Stock'];
$PrecioVenta = $_POST['PrecioVenta'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "INSERT INTO producto(Nombre, Descripcion, Stock, PrecioVenta)  VALUES ('".$Nombre."', '".$Descripción."', '".$Stock."', '".$PrecioVenta."')";
$result = mysqli_query($conn, $sql);


$msg = 'Producto '.$Nombre.' '.$Descripción.' '.$Stock.' '.$PrecioVenta.' registrado';

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $msg;

?>