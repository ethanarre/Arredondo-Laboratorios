<?php
    function matricula(){?>
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
                <th style="width:10em">Alumno</th>
                <th style="width:10em">Curso</th>
                <th style="width:10em">Fecha</th>
            </tr>
            <?php
                $inc = include("conectar.php");
                if ($inc) {
                    $consulta = "SELECT * FROM matricula INNER JOIN cursos ON matricula.id_curso = cursos.id_curso INNER JOIN persona ON matricula.id_alumno = persona.codigo";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                            $id = $row['id_matricula'];
                            $alum = $row['nombre'];
                            $curso = $row['curso'];
                            $fecha = $row['fecha'];
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$alum</td>";
                        echo "<td>$curso</td>";
                        echo "<td>$fecha</td>";
                        echo "<tr>";
                        };
                    };
                }
            ?>
        </table>
    </div>
</body>
</html>
    <?php };
?>
