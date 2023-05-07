<?php
function eliminar(){
    $id = $_POST['id'];
    $inc = include("conectar.php");
    $consulta = "DELETE FROM `cursos` WHERE id_curso = '$id'";
    $resultado = mysqli_query($conex, $consulta);
};
eliminar();
function volver(){
    header("location: index.php");
}
volver();
?>
