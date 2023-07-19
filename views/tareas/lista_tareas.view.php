<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis Tareas</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilo_lista_tareas.css">
</head>
<body>
<h1>Mis Tareas</h1>
	<div>
		<table>
			<tr>
				<th>Titulo</th>
				<th>Descripción</th>
				<th>Fecha de creación</th>
				<th>Fecha de actividad</th>
                <th>Duracion</th>
                <th>Estado</th>
               
			</tr>
			<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
                    <tr><td><?php echo $resultadoconsulta['titulo']?></td> 
					<td><?php echo $resultadoconsulta['descripcion']?></td>
					<td><?php echo $resultadoconsulta['fecha_creacion']?></td>
					<td><?php echo $resultadoconsulta['fecha_actividad']; ?></td>
                    <td><?php echo $resultadoconsulta['duracion']; ?></td>
                    <td><?php echo $resultadoconsulta['estado']; ?></td></tr>
                <?php endforeach; ?>
		</table>
        <a href="categoria.php" target="">Crear Tarea</a>
	
	</div>
</body>
</html>
<style>
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>