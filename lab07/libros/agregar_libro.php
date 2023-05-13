<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario

$nombre = $_POST['nombre'];
$ape_pa = $_POST['ape_pa'];
$ape_ma = $_POST['ape_ma'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "INSERT INTO autor (nombre, ape_pa, ape_ma) VALUES ('$nombre', '$ape_pa', '$ape_ma')";
$result = mysqli_query($conn, $sql);


$msg = 'Autor '.$nombre.' '.$ape_pa.' '.$ape_ma.' registrado';

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $msg;

?>