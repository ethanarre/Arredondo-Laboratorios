<?php
    $input1 = $_POST['name'];
    $input2 = $_POST['direccion'];
    $input3 = $_POST['email'];
    $input4 = $_POST['edad'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>pregunta 2</title>
</head>
<body>
<div class="conteiner px-5 py-5">
    <div class="conteiner px-5 py-5">
        <div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Bienvenido</h4>
                    </div>
                <?php
                    if($input4 >= 18){
                        echo '<div class="card-body">';
                        echo '<p>¡Hola '.$input1.'!</p>';
                        echo '<p>Tu dirección es '.$input2.'</p>';
                        echo '<p>Tienes '.$input4.' años y tu correo es '.$input3.'</p>';
                        echo '</div>';
                    }else{
                        echo '<script language="javascript">alert("Solo se admiten usuarios mayores de edad");</script>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>