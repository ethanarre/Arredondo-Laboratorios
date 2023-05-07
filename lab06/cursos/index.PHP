<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tabla Cursos</title>
    <style>
        .b-example-divider {
            width: 100%;
            height: 1rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, .1), inset 0 0.125em 0.5em rgba(0, 0, 0, .15);
        }
    </style>
</head>
<body class="container">
    <div>
        <H1>CRUD CURSOS</H1>
        <div class="b-example-divider"></div>
        <div>
            <div>
                <h3>TABLA CURSOS</h3>
            </div>
            <div>
                <?php 
                include("mostrar.php");

                ?>
            </div>
        </div>
        <div class="b-example-divider mt-3"></div>
        <div>
            <form action="profesores.php" class="mt-3">
                <input type="submit" value="¿Desea ver la tabla Profesores?">
            </form>
        </div>
        <div class="b-example-divider mt-3"></div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 mt-3">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">¿Desea insertar un nuevo curso?</h4>
                    </div>
                    <div class="card-body">
                        <form action="añadir.php" method="post">
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Nombre del curso: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nombre del curso" name="curso">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Id del profesor: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Id del profesor" name="profe">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Creditos del curso: </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Creditos del curso" name="credi">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Horas del curso: </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Horas del curso" name="horas">
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Añadir">
                                <input type="reset" value="Limpiar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">¿Desea editar un curso?</h4>
                    </div>
                    <div class="card-body">
                        <form action="editar.php" method="post">
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Id del curso que desea editar: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Id del curso" name="id">
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Nombre del curso: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nombre del curso" name="curso">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Id del profesor: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Id del profesor" name="profe">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Creditos del curso: </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Creditos del curso" name="credi">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Horas del curso: </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Horas del curso" name="horas">
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Editar">
                                <input type="reset" value="Limpiar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">¿Desea eliminar un curso?</h4>
                    </div>
                    <div class="card-body">
                        <form action="eliminar.php" method="post">
                            <div class="mb-3 row">
                                <label class="col-sm-10 col-form-label">Id del curso que desea eliminar: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Id del curso" name="id">
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Eliminar">
                                <input type="reset" value="Limpiar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>