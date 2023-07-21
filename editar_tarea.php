<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los valores del formulario
  $idtarea = $_POST['idtarea'];
  $id_categoria = $_POST['id_categoria'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fechaCreacion = $_POST['fecha_creacion'];
  $fechaActividad = $_POST['fecha_actividad'];
  $duracion = $_POST['duracion'];
  $estado = $_POST['estado'];

  // Aqui puedes realizar la lóoca para guardar la actividad en la base de datos o en algúnutro lugar

  // Redireccionar al index.php despue de añnir la actividad
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


$statement = $conexion->prepare('UPDATE tarea SET id_categoria = :id_categoria, titulo = :titulo, descripcion = :descripcion, fecha_actividad=:fechaActividad, duracion=:duracion, estado = :estado WHERE id = :id');
//Revisar si la sentencia SQL es correcta
echo "OK sentencia correcta </br>";
$statement->execute(
  array(':id' => $idtarea, ':id_categoria' => $id_categoria,':titulo'=> $titulo, ':descripcion'=> $descripcion, ':fechaActividad'=> $fechaActividad, ':duracion'=> $duracion, ':estado'=> $estado )
);
//Revisar si se ha enviado todo OK
echo "OK Todo enviado";
}
require './views/tareas/editar_tarea.view.php';
?>