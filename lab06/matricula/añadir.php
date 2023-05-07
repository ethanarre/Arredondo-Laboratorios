<?php
function insertar(){
    $curso = $_POST['curso'];
    $alumno = $_POST['alumno'];
    $fecha = $_POST['fecha'];

    $inc = include("conectar.php");
    $consulta = "INSERT INTO matricula(id_alumno,id_curso,fecha) VALUES ('$curso','$alumno','$fecha')";
    $resultado = mysqli_query($conex, $consulta);
};
insertar();
function volver(){
    header("location: index.php");
}
volver();
?>
