<?php

function tabla(){
    $inc = include("conectar.php");
    if ($inc) {
        $consulta = "SELECT cursos.id_curso,cursos.curso,profesores.nombre,profesores.apellido,cursos.creditos,cursos.horas FROM cursos INNER JOIN profesores ON cursos.id_profesor = profesores.id_profesor";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id_curso'];
                $curso = $row['curso'];
                $p_nom = $row['nombre'];
                $p_ape = $row['apellido'];
                $credi = $row['creditos'];
                $horas = $row['horas'];
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$curso</td>";
            echo "<td>$p_nom $p_ape</td>";
            echo "<td>$credi</td>";
            echo "<td>$horas</td>";
            echo "<tr>";
            };
        };
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA CURSOS</title>
</head>
<body>
    <div>
        <table style="text-align:center" border="2">
            <tr>
                <th style="">ID</th>
                <th style="width:12em">Curso</th>
                <th>Profesor</th>
                <th>Creditos</th>
                <th>Horas</th>
            </tr>
            <?php tabla()?>
        </table>
    </div>
</body>
</html>
