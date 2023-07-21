<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis Tareas</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo_lista_tareas.css">
</head>
<body>
<h1>Mis Tareas</h1>
	<div>
		<table>
			<tr>
				<th>Titulo</th>
				<th>Descripción</th>
				<th>Fecha de actividad</th>
			</tr>
			<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
                    <tr><td><?php echo $resultadoconsulta['titulo']?></td> 
					<td><?php echo $resultadoconsulta['descripcion']?></td>
					<td><?php echo $resultadoconsulta['fecha_actividad']; ?></td>
                <?php endforeach; ?>
		</table>
        <a href="anadir_tarea.php" target="">Crear Tarea</a>
	
	</div>
</body>
</html>
