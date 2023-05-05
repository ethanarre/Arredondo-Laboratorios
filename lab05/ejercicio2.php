<?php
    $gaseosa = $_POST['gaseosa'];
    $unidades = $_POST['unidades'];

    $rebaja = $gaseosa * 0.05;
    $descu = 0.07 * $gaseosa;

    $caramelos = 2 * $unidades;
    $newprecio = $gaseosa-($rebaja+$descu);
    $impoc = $rebaja * $unidades;
    $impod = $descu * $unidades;
    $impop = $newprecio * $unidades;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body class="container">
    <div>
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Respuesta</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-4">
              <li>Nuevo precio de la gaseosa: <?php echo $newprecio ?></li>
              <li>Importe de la compra: <?php echo $impoc ?> </li>
              <li>Importe del descuento: <?php echo $impod ?> </li>
              <li>Importe a pagar: <?php echo $impop ?> </li>
              <li>Obsequio: <?php echo $caramelos ?> </li>
            </ul>
            <form action="index.html">
                <input type="submit" class="w-100 btn btn-lg btn-outline-primary" value="Regresar">
            </form>
          </div>
        </div>
      </div>
</body>
</html>