<!DOCTYPE html>
<html>
<head>
  <title>Añadir Actividad</title>
  <link rel="stylesheet" type="text/css" href="css/estilo_anadir-editar.css">
</head>
<body>
<?php require 'logout.view.php' ?>

  <h1>Añadir Actividad <?php echo $_SESSION["categoria"]; ?></h1>

  <div class="container">
    <div class="main-content">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <input type="text" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
          <label for="fecha_actividad">Fecha de Actividad</label>
          <input type="date" id="fecha_actividad" name="fecha_actividad" required>
        </div>
        <div class="form-group">
          <label for="duracion">Duración</label>
          <input type="text" id="duracion" name="duracion">
        </div>
        <button type="submit">Añadir tarea</button>
        <a class="button-volver" href="index.php">Volver</a>
      </form>
    </div>
  </div>
</body>
</html>