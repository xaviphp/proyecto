<?php
session_start();

// Verifica si se ha enviado un formulario y si el ID de la tarea está presente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_tarea"])) {
    // Obtén el ID de la tarea desde el formulario
    $id_tarea = $_POST["id_tarea"];

    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
    $sql = "DELETE FROM tarea WHERE id = $id_tarea";

    // Ejecuta la consulta
    if ($conexion->query($sql)) {
        // La tarea se eliminó correctamente
        // Aquí puedes redirigir al usuario de nuevo a la página de lista de tareas u otra página relevante
        header("Location: lista_tareas.php");
    }

}
?>