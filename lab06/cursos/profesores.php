<?php
    function personas(){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA PROFESORES</title>
</head>
<body>
    <div>
        <table style="text-align:center" border="2">
            <tr>
                <th style="">ID</th>
                <th style="width:10em">Nombre</th>
                <th style="width:10em">Apellido</th>
                <th style="width:10em">Email</th>
                <th style="width:10em">Telefono</th>
            </tr>
            <?php
                $inc = include("conectar.php");
                if ($inc) {
                    $consulta = "SELECT * FROM profesores";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                            $id = $row['id_profesor'];
                            $nombre = $row['nombre'];
                            $apellido = $row['apellido'];
                            $email = $row['email'];
                            $telefono = $row['telefono'];
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$nombre</td>";
                        echo "<td>$apellido</td>";
                        echo "<td>$email</td>";
                        echo "<td>$telefono</td>";
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

