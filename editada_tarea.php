<?php
session_start();
 echo$_SESSION['IDTAREA'];
  $idtarea = $_SESSION['IDTAREA'];


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


require './views/tareas/editada_tarea.view.php';

if (isset($GET['submit'])) {
  $tituloUpdate = $GET['titulo'];
  $statement = $conexion->prepare("UPDATE tarea SET id_categoria = :id_categoria, titulo = :titulo, descripcion = :descripcion, fecha_actividad=:fecha_actividad, duracion=:duracion, estado = :estado WHERE id = '$idtarea'");
  $statement->execute(
      array(':id_categoria' => $id_categoria,':titulo'=> $tituloUpdate, ':descripcion'=> $descripcion, ':fecha_actividad'=> $fecha_actividad, ':duracion'=> $duracion, ':estado'=> $estado )
  );
}





?>