<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los valores del formulario
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fechaCreacion = $_POST['fecha_creacion'];
  $fechaActividad = $_POST['fecha_actividad'];
  $duracion = $_POST['duracion'];
  $estado = $_POST['estado'];

  // Aquí puedes realizar la lógica para guardar la actividad en la base de datos o en algún otro lugar

  // Redireccionar al index.php después de añadir la actividad
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


$statement = $conexion->prepare('INSERT INTO tarea VALUES (1, 1, 1, :titulo, :descripcion, :fechaCreacion, :fechaActividad, :duracion, :estado)');
//Revisar si la sentencia SQL es correcta
echo "OK sentencia correcta </br>";
$statement->execute(
  array(':titulo'=> $titulo, ':descripcion'=> $descripcion, ':fechaCreacion'=> $fechaCreacion, ':fechaActividad'=> $fechaActividad, ':duracion'=> $duracion, ':estado'=> $estado )
);
//Revisar si se ha enviado todo OK
echo "OK Todo enviado";
}
require './views/tareas/editar_tarea.view.php';
?>