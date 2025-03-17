<?php
session_start();

if (!isset($_SESSION['reto2_superado']) || $_SESSION['reto2_superado'] !== true) {
    header("Location: trampas.php");
    exit();
}


$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta = strtolower(trim($_POST['respuesta']));

    $correctas = ["cristiano ronaldo", "ronaldo", "cr7"];
    if (in_array($respuesta, $correctas)) {
        $_SESSION['reto3_superado'] = true;
        header("Location: reto4.php");
        exit();
    } else {
        $error = "Pista: Su apodo es CR7.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 3</title>
    <link rel="stylesheet" href="css/retos.css">
</head>
<body>
    <div class="container">
        <h2>Reto 3</h2>
        <p>¿Quién es el máximo goleador en la historia de la UEFA Champions League?</p>
        <form method="post">
            <input type="text" name="respuesta" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>
