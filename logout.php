<?php
session_start(); // Inicia la sesión si no está iniciada

// Destruye todas las variables de sesión
$_SESSION = array();

// Borra la cookie de sesión si está configurada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruye la sesión
session_destroy();

// Redirige a la página de inicio de sesión u otra página después de cerrar sesión
header("Location: login.php"); // Cambia "index.php" por la página que desees
exit();
?>