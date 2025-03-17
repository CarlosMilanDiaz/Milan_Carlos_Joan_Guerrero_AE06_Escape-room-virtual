<?php
session_start();
if (!isset($_SESSION['retos'])) {
    $_SESSION['retos'] = 0;
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = strtolower(trim($_POST['respuesta']));
    if ($respuesta == "messi") {
        $_SESSION['retos'] = 1;
        header("Location: reto2.php");
        exit();
    } else {
        $error = "Pista: Es el jugador con más Balón de Oro.";
    }
}
?>