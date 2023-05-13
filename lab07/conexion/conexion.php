<?php
function conectar(){
    $conn = mysqli_connect("localhost","root","usbw","crud");
    return $conn;
}
function desconectar($conexion){
    mysqli_close($conexion);
}
?>