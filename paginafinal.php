<?php
session_start();
if (!isset($_SESSION['reto4_superado']) || $_SESSION['reto4_superado'] !== true) {
    header("Location: trampas.php");
    exit();
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla Final</title>
    <link rel="stylesheet" href="./css/paginas_principales.css"> 
</head>
<body>
    <header>
        <h1>¡Felicidades, Campeón!</h1>
    </header>

    <main>
        <section class="paginafinal">
            <h1>¡Has completado todos los retos de fútbol con éxito!</h1>
            <p class="message">¡Eres una leyenda del fútbol!</p>
            <div class="button">
                <button onclick="volverAlInicio()">Volver al inicio</button>
            </div>
        </section>
    </main>

    <footer>
        <p>©Carlos Milan y Joan Guerrero</p>
    </footer>

    <script>

        function volverAlInicio() {

            window.location.href = "index.php"; 
        }
    </script>
</body>
</html>

