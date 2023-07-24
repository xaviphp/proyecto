<?php

  $idtarea = $GET['id'];

  // Aqui puedes realizar la lóoca para guardar la actividad en la base de datos o en algúnutro lugar

  // Redireccionar al index.php despue de añnir la actividad
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}
// Consulta SQL para traer datos de la tarea
$statementconsulta = $conexion->query("SELECT * FROM tarea WHERE id =  $idtarea");
$resultadosconsulta = $statementconsulta->fetchAll();

// Consulta SQL para traer las categorias existentes
$statementconsulta2 = $conexion->query("SELECT * FROM categoria");
$resultadosconsulta2 = $statementconsulta2->fetchAll();

$statement = $conexion->prepare('UPDATE tarea SET id_categoria = :id_categoria, titulo = :titulo, descripcion = :descripcion, fecha_actividad=:fechaActividad, duracion=:duracion, estado = :estado WHERE id = :id');
//Revisar si la sentencia SQL es correcta
echo "OK sentencia correcta </br>";
$statement->execute(
  array(':id' => $idtarea, ':id_categoria' => $id_categoria,':titulo'=> $titulo, ':descripcion'=> $descripcion, ':fechaActividad'=> $fechaActividad, ':duracion'=> $duracion, ':estado'=> $estado )
);
//Revisar si se ha enviado todo OK
echo "OK Todo enviado";
require './views/tareas/editar_tarea.view.php';

?>