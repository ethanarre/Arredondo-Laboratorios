<?php
    function personas(){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA ALUMNOS</title>
</head>
<body>
    <div>
        <table style="text-align:center" border="2">
            <tr>
                <th style="">ID</th>
                <th style="width:10em">Nombre</th>
                <th style="width:10em">Edad</th>
                <th style="width:10em">Signo</th>
            </tr>
            <?php
                $inc = include("conectar.php");
                if ($inc) {
                    $consulta = "SELECT * FROM persona";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                            $id = $row['codigo'];
                            $nombre = $row['nombre'];
                            $edad = $row['edad'];
                            $signo = $row['signo'];
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$nombre</td>";
                        echo "<td>$edad</td>";
                        echo "<td>$signo</td>";
                        echo "<tr>";
                        };
                    };
                }
            ?>
        </table>
    </div>
    <div>
        <form action="index.php">
            <input type="submit" value="Regresar">
        </form>
    </div>
</body>
</html>
    <?php };
    personas();
?>

