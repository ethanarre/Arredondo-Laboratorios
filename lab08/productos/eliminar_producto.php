<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$IdProducto = $_POST['IdProducto'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "DELETE FROM producto WHERE IdProducto = $IdProducto";
$result = mysqli_query($conn, $sql);

// Cerramos la conexión a la base de datos
desconectar($conexion);

function volver(){
    header("location: ../index.html");
}
volver();
?>