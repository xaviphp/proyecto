<?php
session_start();

if (isset($_GET["id"])) {
  $idtarea = $_GET["id"];
};

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
$statement->execute(
  array(':id' => $idtarea, ':id_categoria' => $id_categoria,':titulo'=> $titulo, ':descripcion'=> $descripcion, ':fechaActividad'=> $fechaActividad, ':duracion'=> $duracion, ':estado'=> $estado )
);

require './views/tareas/editar_tarea.view.php';

?>