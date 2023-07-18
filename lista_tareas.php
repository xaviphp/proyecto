<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


			//Buscar datos del formulario "READ" SQL
			$statementconsulta = $conexion->query('SELECT titulo, descripcion, fecha_creacion, fecha_actividad, duracion, estado FROM tarea
           ');
            
			// $statement->execute();
			//Otro paquete de informaciÃÂ³n en un array del registro de la ID seleccionada por el formulario
			$resultadosconsulta = $statementconsulta->fetchAll();
			//Como mostramos los datos

	require './views/lista_tareas/lista_tareas.view.php';



?>