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
	<div class="container">
    <div class="header">
		<h1>Do-It</h1>
		<button class="add-button">+</button>
	</div>
	<div class="notes">
	
	<!-- Mostrar las tareas agrupadas por fecha -->
	<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
		<div class="fecha-group">
			<h3 class="fecha-titulo"><?php echo $resultadoconsulta['fecha_actividad']; ?></h3>
			<?php foreach ($tareas as $tarea) : ?>
            <div class="nota">
                <h3 class="nota-titulo"><?php echo $resultadoconsulta['titulo']?></h3>
                <p class="nota-descripcion"><?php echo $resultadoconsulta['descripcion']; ?></p>
            </div>
			<?php endforeach; ?>
    	</div>
	<?php endforeach; ?>
	</div>
</div>
        <a href="anadir_tarea.php" target="">Crear Tarea</a>
		<a href="index.php" target="">Volver</a>
	
	</div>
</body>
</html>

