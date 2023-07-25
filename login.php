<?php session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = strtolower($_POST['usuario']);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	// Nos conectamos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=gestion_actividades', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
	$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		echo $usuario;
		$statement2 = $conexion->query("SELECT id FROM usuarios WHERE usuario = '$usuario'");
		$resultado2 = $statement2->fetch();
		$_SESSION['IDUSUARIO']=$resultado2['id'];
		header('Location: index.php');
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'views/login/login.view.php';

?>