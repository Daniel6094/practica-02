<!DOCTYPE html>
<html>
<head>
    <title>Juego de Adivinar el Número</title>
</head>
<body>
    <h1>Juego de Adivinar el Número</h1>
    <form method="post">
        <label for="numero">Ingresa un número del 1 al 10:</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <br><br>
        <input type="submit" name="adivinar" value="Adivinar">
    </form>

    <?php
    if (isset($_POST['adivinar'])) {
        $numeroUsuario = $_POST['numero'];
        $numeroAleatorio = rand(1, 10);

        echo "<h2>Número generado aleatoriamente: $numeroAleatorio</h2>";

        if ($numeroUsuario == $numeroAleatorio) {
            echo "<h2>¡Felicidades! Has adivinado el número.</h2>";
        } else {
            echo "<h2>Lo siento, no has adivinado el número. Inténtalo de nuevo.</h2>";
        }
    }
    ?>
</body>
</html>
