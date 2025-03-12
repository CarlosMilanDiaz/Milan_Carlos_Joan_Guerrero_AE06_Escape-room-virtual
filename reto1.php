<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1: ¿Cuántos jugadores?</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <h1>Reto 1: ¿Cuántos jugadores?</h1>
    </header>
    <main class="main">
        <s qection class="challenge">
            <h2>¿Cuántos jugadores tiene un equipo de fútbol en el campo?</h2>
            <form action="" method="POST" class="challenge-form">
                <div class="options">
                    <label>
                        <input type="radio" name="jugadores" value="9" required>
                        9
                    </label><br>
                    <label>
                        <input type="radio" name="jugadores" value="11" required>
                        11
                    </label><br>
                    <label>
                        <input type="radio" name="jugadores" value="13" required>
                        13
                    </label>
                </div>
                <button type="submit" class="submit-button">Enviar</button>
            </form>

            <!-- Mensaje de pista, visible solo si hay error -->
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 'true') {
                echo "<p class='error-message'>Respuesta incorrecta. Pista: Es un número impar y juega en partidos oficiales.</p>";
            }
            ?>
        </section>
    </main>
    <footer class="footer">
        <p>©Carlos Milan y Joan Guerrero</p>
    </footer>
</body>
</html>
