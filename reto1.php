<?php
session_start();

// Verifica si la sesión está iniciada
if (!isset($_SESSION['reto1_superado'])) {
    $_SESSION['reto1_superado'] = false;
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = strtolower(trim(preg_replace('/\s+/', ' ', $_POST['respuesta'])));

    $correctas = ["messi", "lionel messi", "leo messi"];
    if (in_array($respuesta, $correctas)) {
        $_SESSION['reto1_superado'] = true;
        header("Location: reto2.php");
        exit();
    } else {
        $error = "Pista: Es el jugador con más Balón de Oro.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
    <link rel="stylesheet" href="css/retos.css">
</head>
<body>
    <div class="container">
        <h2>Reto 1</h2>
        <p>¿Quién es considerado el mejor futbolista de todos los tiempos?</p>
        <form method="post">
            <input type="text" name="respuesta" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>
