<?php
session_start();

$_SESSION['id'] = $_GET["id"];

if (isset($_GET["id"])) {
  $idtarea = $_GET["id"];
  $_SESSION['IDTAREA']= $_GET["id"];
};

// echo $idtarea;

try {
  $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
  echo "Error: " . $e->getMessage();
}
// Consulta SQL para traer datos de la tarea
$statementconsulta = $conexion->query("SELECT * FROM tarea WHERE id =  $idtarea");
$resultadosconsulta = $statementconsulta->fetchAll();
// print_r($resultadosconsulta);
$titulo=$resultadosconsulta[0]['titulo'];
$descripcion=$resultadosconsulta[0]['descripcion'];
$fecha_actividad=$resultadosconsulta[0]['fecha_actividad'];
$duracion=$resultadosconsulta[0]['duracion'];
$estado=$resultadosconsulta[0]['estado'];

// Consulta SQL para traer las categorias existentes
$statementconsulta2 = $conexion->query("SELECT * FROM categoria");
$resultadosconsulta2 = $statementconsulta2->fetchAll();
// print_r($resultadosconsulta2);
$id_categoria=$resultadosconsulta2[0]['id'];
$nombre_categoria=$resultadosconsulta2[0]['nombre_categoria'];

require './views/tareas/editar_tarea.view.php';

if (isset($_GET['submit'])) {
  $tituloUpdate = $_GET['titulo'];
  
  $statement = $conexion->prepare("UPDATE tarea SET id_categoria = :id_categoria, titulo = :titulo, descripcion = :descripcion, fecha_actividad = :fecha_actividad, duracion = :duracion, estado = :estado WHERE id = :idtarea");
  $statement->execute(array(
    ':id_categoria' => $id_categoria,
    ':titulo' => $tituloUpdate,
    ':descripcion' => $descripcion,
    ':fecha_actividad' => $fecha_actividad,
    ':duracion' => $duracion,
    ':estado' => $estado,
    ':idtarea' => $idtarea
  ));
}

?>