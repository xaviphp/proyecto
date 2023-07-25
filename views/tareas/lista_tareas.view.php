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
<div>
	<div class="container">
		<div class="header">
			<h1>Do-It</h1>
			<a href="anadir_tarea.php" target=""><button class="add-button">+</button></a>
		</div>
		<div class="notes">
			<!-- Mostrar las tareas agrupadas por fecha -->
			<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
				<div class="fecha-group">
					<h3 class="fecha-titulo"><?php echo $resultadoconsulta['fecha_actividad']; ?></h3>
					<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
					<div class="nota">
					<h3 class="nota-titulo"><a href="editar_tarea.php?id=<?php echo $resultadoconsulta['id'] ?>"><?php echo $resultadoconsulta['titulo']?></a></h3>
					<p class="nota-descripcion"><?php echo $resultadoconsulta['descripcion']; ?></p>
					<p class="estado"><?php 
					if($resultadoconsulta['estado']==0){
						echo "Tarea Sin Completar";
					}else{
						echo"Tarea Completada";
					} ?></p>
					<form action="eliminar_tarea.php" method="post">
						<input type="hidden" name="id_tarea" value="<?php echo $resultadoconsulta['id'] ?>">
						<input class="delete-boton" type="submit" name="submit" value="Eliminar tarea">
					</form>
				</div>
			<?php endforeach; ?>
	
		</div>
		<?php endforeach; ?>
		<a class="button-volver" href="index.php">Volver</a>
	</div>
</div>
</body>
</html>

