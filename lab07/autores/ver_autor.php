<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$valores = "";

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "SELECT id_autor, nombre, ape_pa, ape_ma FROM autor";
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	  $valores = $valores .'<tr>'.
	  						 '<td id="id_autor">'.$crow['id_autor'].'</td>'.
	                         '<td>'.$crow['nombre'].'</td>'.
							 '<td>'.$crow['ape_pa'].'</td>'.
							 '<td>'.$crow['ape_ma'].'</td>'.
							 '<td>'.
								'<i onclick="eliminar_autor('.$crow['id_autor'].')" class="pe pe-7s-trash text-accent"></i>&nbsp;&nbsp;'.
							    '<i onclick="editar_form('.$crow['id_autor'].')" class="pe pe-7s-pen text-accent"></i>'.
							 '</td>'.
						   '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $valores;

?>