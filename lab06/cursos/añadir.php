<?php
function insertar(){
    $curso = $_POST['curso'];
    $profe = $_POST['profe'];
    $credi = $_POST['credi'];
    $horas = $_POST['horas'];

    $inc = include("conectar.php");
    $consulta = "INSERT INTO cursos(curso,id_profesor,creditos,horas) VALUES ('$curso','$profe','$credi','$horas')";
    $resultado = mysqli_query($conex, $consulta);
};
insertar();
function volver(){
    header("location: index.php");
}
volver();
?>
