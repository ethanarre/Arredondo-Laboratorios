<?php
function editar(){
    $id = $_POST['id'];
    $curso = $_POST['curso'];
    $profe = $_POST['profe'];
    $credi = $_POST['credi'];
    $horas = $_POST['horas'];

    $inc = include("conectar.php");
    $consulta = "UPDATE cursos SET curso='$curso',id_profesor='$profe',creditos='$credi',horas='$horas' WHERE id_curso='$id' ";
    $resultado = mysqli_query($conex, $consulta);
};
editar();
function volver(){
    header("location: index.php");
}
volver();
?>
