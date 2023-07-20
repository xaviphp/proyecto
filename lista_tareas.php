<?php
session_start();

if (isset($_GET["categoria"])) {
    $_SESSION["categoria"] = $_GET["categoria"];
}

try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}

if (isset($_SESSION["categoria"])) {
    $nombre_categoria = $_SESSION["categoria"];
    
    // Consulta SQL utilizando la variable $nombre_categoria
    $statementconsulta = $conexion->query("SELECT titulo, descripcion, fecha_creacion, fecha_actividad, duracion, estado FROM tarea INNER JOIN categoria on tarea.id_categoria = categoria.id WHERE categoria.nombre_categoria = '$nombre_categoria'");
    $resultadosconsulta = $statementconsulta->fetchAll();
}


	require './views/tareas/lista_tareas.view.php';



?>