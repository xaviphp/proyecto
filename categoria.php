<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
} catch (\Throwable $th) {
    echo "Error: " . $e->getMessage();
}


			//Buscar datos del formulario "READ" SQL
			$statementconsulta = $conexion->query('SELECT nombre_categoria FROM categoria
            ');
            
			// $statement->execute();
			//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
			$resultadosconsulta = $statementconsulta->fetchAll();
			//Como mostramos los datos
            $st =  $conexion->query('SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME = "categoria"');
            //print_r($st);

            $resultadosconsulta2 = $st->fetchAll();
            require './views/tareas/categoria.view.php';
            ?>