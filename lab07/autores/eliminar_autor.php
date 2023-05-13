<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$id_autor = $_POST['id_autor'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "DELETE FROM `autor` WHERE id_autor = $id_autor";
$result = mysqli_query($conn, $sql);

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $valores;

?>