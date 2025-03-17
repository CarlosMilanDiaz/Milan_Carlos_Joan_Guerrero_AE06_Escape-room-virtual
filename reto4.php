<<<<<<< HEAD
<?php
session_start();

// Evita que accedan sin haber pasado el reto 3
if (!isset($_SESSION['reto3_superado']) || $_SESSION['reto3_superado'] !== true) {
    header("Location: trampas.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = strtolower(trim($_POST['respuesta']));

    $correctas = ["real madrid", "madrid", "real madrid cf"];
    if (in_array($respuesta, $correctas)) {
        $_SESSION['reto4_superado'] = true;
        header("Location: paginafinal.php");
        exit();
    } else {
        $error = "Pista: Es el equipo con más Champions League ganadas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4</title>
    <link rel="stylesheet" href="css/retos.css">
</head>
<body>
    <div class="container">
        <h2>Reto 4</h2>
        <p>¿Qué equipo ha ganado más títulos de la UEFA Champions League?</p>
        <form method="post">
            <input type="text" name="respuesta" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>
=======
<?php
session_start();

// Evita que accedan sin haber pasado el reto 3
if (!isset($_SESSION['reto4_superado']) || $_SESSION['reto4_superado'] !== true) {
    header("Location: trampas.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = strtolower(trim($_POST['respuesta']));

    $correctas = ["real madrid", "madrid", "real madrid cf"];
    if (in_array($respuesta, $correctas)) {
        $_SESSION['reto4_superado'] = true;
        header("Location: paginafinal.html");
        exit();
    } else {
        $error = "Pista: Es el equipo con más Champions League ganadas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4</title>
    <link rel="stylesheet" href="css/retos.css">
</head>
<body>
    <div class="container">
        <h2>Reto 4</h2>
        <p>¿Qué equipo ha ganado más títulos de la UEFA Champions League?</p>
        <form method="post">
            <input type="text" name="respuesta" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>
>>>>>>> 2749c3fe5c74191a29e4a178ad80b26df7c356fa
