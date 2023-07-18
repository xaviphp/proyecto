<!DOCTYPE html>
<html>
<head>
  <title>Añadir Actividad</title>
  <link rel="stylesheet" type="text/css" href="estilo-prueba.css">
</head>
<body>
  <h1>Añadir Actividad</h1>

  <div class="container">
    <div class="main-content">
      <h2>Formulario</h2>
      <form action="formulario.php" method="POST">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <input type="text" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
          <label for="fecha_creacion">Fecha de Creación</label>
          <input type="date" id="fecha_creacion" name="fecha_creacion" required>
        </div>
        <div class="form-group">
          <label for="fecha_actividad">Fecha de Actividad</label>
          <input type="date" id="fecha_actividad" name="fecha_actividad" required>
        </div>
        <div class="form-group">
          <label for="duracion">Duración</label>
          <input type="text" id="duracion" name="duracion">
        </div>
        <div class="form-group">
          <label for="estado">Estado</label>
          <input type="text" id="estado" name="estado">
        </div>
        <button type="submit">Añadir Actividad</button>
      </form>
    </div>
  </div>
</body>
</html>