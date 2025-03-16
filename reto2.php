<?php
session_start();

// Evita que accedan sin haber pasado el reto 1
if (!isset($_SESSION['reto1_superado']) || $_SESSION['reto1_superado'] !== true) {
    header("Location: trampas.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = strtolower(trim($_POST['respuesta']));

    $correctas = ["barcelona", "fc barcelona", "barça", "fútbol club barcelona"];
    if (in_array($respuesta, $correctas)) {
        $_SESSION['reto2_superado'] = true;
        header("Location: reto3.php");
        exit();
    } else {
        $error = "Pista: Juega la gran promesa Lamine Yamal.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2</title>
    <link rel="stylesheet" href="css/retos.css">
</head>
<body>
    <div class="container">
        <h2>Reto 2</h2>
        <img src="./img/pista2.jpg" alt="Escudo del equipo">
        <p>¿A qué equipo pertenece este escudo?</p>
        <form method="post">
            <input type="text" name="respuesta" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>
