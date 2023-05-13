<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$valores = "";

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de dato
$sql = "SELECT * FROM libro INNER JOIN autor ON autor.id_autor = libro.id_autor";
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	  $valores = $valores .'<tr>'.
	  						 '<td>'.$crow['id_libro'].'</td>'.
	                         '<td>'.$crow['anio'].'</td>'.
							 '<td>'.$crow['nombre'].'</td>'.
							 '<td>'.$crow['titulo'].'</td>'.
							 '<td>'.$crow['url'].'</td>'.
							 '<td>'.$crow['especialidad'].'</td>'.
							 '<td>'.$crow['editorial'].'</td>'.
							 '<td>'.
								'<i onclick="eliminar_libro('.$crow['id_libro'].')" class="pe pe-7s-trash text-accent"></i>&nbsp;&nbsp;'.
							    '<i onclick="editar_libro('.$crow['id_libro'].')" class="pe pe-7s-pen text-accent"></i>'.
							 '</td>'.
						   '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $valores;

?>