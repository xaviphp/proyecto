<?php
session_start();
// Verificar si se ha enviado el formulario
echo $_SESSION["categoria"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los valores del formulario
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fechaActividad = $_POST['fecha_actividad'];
  $duracion = $_POST['duracion'];

  // AquÃÂÃÂ­ puedes realizar la lÃÂÃÂ³gica para guardar la actividad en la base de datos o en algÃÂÃÂºn otro lugar

  // Redireccionar al index.php despuÃÂÃÂ©s de aÃÂÃÂ±adir la actividad
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}
$nombre_categoria = $_SESSION["categoria"];
$consultacategoria = $conexion->query("SELECT id FROM categoria WHERE categoria.nombre_categoria = '$nombre_categoria'");
$numerocategoria = $consultacategoria->fetch();
$num = $numerocategoria['id'];

$statement = $conexion->prepare("INSERT INTO tarea VALUES (null, 1, $num, :titulo, :descripcion, NOW(), :fechaActividad, :duracion, 'false')");
//Revisar si la sentencia SQL es correcta
echo "OK sentencia correcta </br>";
$statement->execute(
  array(':titulo'=> $titulo, ':descripcion'=> $descripcion, ':fechaActividad'=> $fechaActividad, ':duracion'=> $duracion )
);
//Revisar si se ha enviado todo OK
echo "OK Todo enviado";
}
require './views/tareas/anadir_tarea.view.php';
?>