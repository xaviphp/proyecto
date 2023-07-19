<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar registros</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="añadir_tarea.php" method="post">
			<p>Selecciona la categoria</p>
			<select name="id" id="id" class="form-control">
				<option value=""></option>
				<?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
                    <option><?php echo $resultadoconsulta['nombre_categoria']; ?></option>
                <?php endforeach; ?>
			</select>

			<input type="submit" name="submit" class="btn btn-primary" value="Seleccionar">
		</form>
	</div>
	<div>
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