<?php
function insertar(){
    $id = $_POST["id"];
    $curso = $_POST['curso'];
    $alumno = $_POST['alumno'];
    $fecha = $_POST['fecha'];

    $inc = include("conectar.php");
    $consulta = "UPDATE `matricula` SET `id_alumno`=$alumno,`id_curso`=$curso,`fecha`='$fecha' WHERE id_matricula=$id";
    $resultado = mysqli_query($conex, $consulta);
};
insertar();
function volver(){
    header("location: index.php");
}
volver();
?>
