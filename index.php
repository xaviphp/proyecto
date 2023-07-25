<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>To-Do List App</title>
  <link rel="stylesheet" type="text/css" href="./css/estilo_index.css">
</head>
<body>
  <h1>To-Do List App</h1>
  <a href="logout.php">Cerrar sesión</a>

  <div class="container">
    <div class="sidebar">
      <h2>Categorías</h2>
      <ul class="category-list">
        <?php
        // Array de categorías
        $categorias = array(
          'Casa',
          'Compras',
          'Trabajo',
          'Estudio',
          'Salud y Bienestar',
          'Finanzas',
          'Social',
          'Proyectos Personales',
          'Viajes',
          'Entretenimiento'
        );

        // Mostrar opciones de categorías en el desplegable
        foreach ($categorias as $categoria) {
          echo '<li><a href="lista_tareas.php?categoria=' . urlencode($categoria) . '">' . $categoria . '</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</body>
</html> 