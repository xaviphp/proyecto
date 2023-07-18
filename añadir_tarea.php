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
  header("Location: index-pruebas.php");
  exit();
}
?>