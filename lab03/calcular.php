<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];

    $re1 = $numero1 + $numero2;
    $re2 = $numero3 * $numero4
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        .color{
            background-image: linear-gradient(180deg, #42e8cc 0, #31d5c4 16.67%, #27c0b8 33.33%, #25a8a8 50%, #279196 66.67%, #2a7d85 83.33%, #2c6b75 100%);;
        }
      </style>
    <title>Ejercicio 2</title>
</head>
<body>
    <div class="container">
        <div class="b-example-divider" style=""></div>
        <div class="px-4 py-5 my-5 text-cemter color">
            <div>
                <h1>La suma de los dos primeros numeros es <?php echo $re1 ?> </h1><br>
                <h1>El producto de los dos ultimos numeros es <?php echo $re2 ?></h1><br>
            </div><br>
            <form action="index.html" method="post">
                <div>
                    <button type="submit" class="btn btn-primary" >Regresar</button>
                </div>
            </form>
        </div>
        <div class="b-example-divider" style="background-color:gray"></div>
    </div>
</body>
</html>