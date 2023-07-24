<!DOCTYPE html>
<html>
<head>
  <title>Editar Actividad</title>
  <link rel="stylesheet" type="text/css" href="css/estilo_anadir-editar.css">
</head>
<body>
  <h1>Editar Actividad</h1>

  <div class="container">
    <div class="main-content">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" id="titulo" name="titulo" value="<?php echo $resultadosconsulta['titulo']; ?>">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <input type="text" id="descripcion" name="descripción" value="<?php echo $resultadoconsulta['titulo']; ?>">
        </div>
        <div class="form-group">
          <label for="categoria">Categoría</label>
          <select id="categoria" name="categoria">
            <?php foreach ($resultadosconsulta as $resultadoconsulta): ?>
              <option value="<?php echo $resultadoconsulta['categoria']; ?>">value="<?php echo $resultadoconsulta['categoria']; ?>"</option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="fecha_actividad">Fecha de Actividad</label>
          <input type="date" id="fecha_actividad" name="fecha_actividad" required>
        </div>
        <div class="form-group">
          <label for="duracion">Duración</label>
          <input type="text" id="duracion" name="duración" value="<?php echo $resultadoconsulta['duracion']; ?>">
        </div>
        <label for="completada">Tarea completada:</label>
        <input type="checkbox" id="completada" name="completada" value="<?php echo $resultadoconsulta['estado'] ? 'checked' : ''; ?>">
        <button type="submit">ACTUALIZAR</button>
      </form>
    </div>
  </div>
</body>
</html>