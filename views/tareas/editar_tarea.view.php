<? require 'logout.view.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Editar Actividad</title>
  <link rel="stylesheet" type="text/css" href="css/estilo_anadir-editar.css">
</head>
<body>
<?php require 'logout.view.php' ?>

  <h1>Editar Actividad</h1>

  <div class="container">
    <div class="main-content">
   
      <form action="editada_tarea.php" method="GET">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion ?>">
        </div>
        <div class="form-group">
          <label for="categoria">Categoría</label>
          <select id="categoria" name="categoria">
          <option value="<?php echo $_SESSION["categoria"] ?>" selected ><?php echo $_SESSION["categoria"] ?></option>
            <?php foreach ($resultadosconsulta2 as $resultadoconsulta2): ?>
              <option value="<?php echo $resultadoconsulta2['id']; ?>" ><?php echo $resultadoconsulta2['nombre_categoria']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="fecha_actividad">Fecha de Actividad</label>
          <input type="date" id="fecha_actividad" name="fecha_actividad"  value="<?php echo $fecha_actividad ?>">
        </div>
        <div class="form-group">
          <label for="duracion">Duración</label>
          <input type="text" id="duracion" name="duración" value="<?php echo $duracion ?>">
        </div>
        <label for="completada">Tarea completada:</label>
        <input type="checkbox" id="completada" name="completada">
        <button type="submit">ACTUALIZAR</button>
        <a class="button-volver" href="index.php">Volver</a>

      </form>
    </div>
  </div>
</body>
</html>

<!--  <?php if($resultadosconsulta2['estado']==1){
          ?>checked<?php
        } ?> -->