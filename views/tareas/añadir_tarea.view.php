<!DOCTYPE html>
<html>
<head>
  <title>Añadir Actividad</title>
  <link rel="stylesheet" type="text/css" href="css/estilo_añadir-editar.css">
</head>
<body>
  <h1>Añadir Actividad</h1>

  <div class="container">
    <div class="main-content">
      <h2>Formulario</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <input type="text" id="descripcion" name="descripción">
        </div>
        <div class="form-group">
          <label for="duracion">Duración</label>
          <input type="text" id="duracion" name="duración">
        </div>
        <button type="submit">Añadir tarea</button>
      </form>
    </div>
  </div>
</body>
</html>