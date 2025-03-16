<?php
session_start();

// Eliminar todos los datos de la sesión
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla Final</title>
    <link rel="stylesheet" href="./css/paginas_principales.css"> <!-- Asegúrate de que este archivo CSS sea el adecuado -->
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
        // Función para redirigir al usuario al inicio y borrar la sesión
        function volverAlInicio() {
            // Redirige a la página de inicio o ruta principal
            window.location.href = "index.php";  // Asegúrate de que "index.php" sea tu página de inicio
        }
    </script>
</body>
</html>

