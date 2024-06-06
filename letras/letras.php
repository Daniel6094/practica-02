<!DOCTYPE html>
<html>
<head>
    <title>Contador de Coincidencias de Letras</title>
</head>
<body>
    <h1>Contador de Coincidencias de Letras</h1>
    <form method="post">
        <label for="phrase">Frase:</label>
        <textarea name="phrase" id="phrase" rows="4" cols="50" required></textarea>
        <br><br>

        <label for="letter">Letra:</label>
        <input type="text" name="letter" id="letter" maxlength="1" required>
        <br><br>

        <input type="submit" name="count" value="Contar Coincidencias">
    </form>

    <?php
    if (isset($_POST['count'])) {
        $phrase = $_POST['phrase'];
        $letter = $_POST['letter'];

        if (strlen($letter) != 1) {
            echo "<h2>Por favor, ingrese una sola letra.</h2>";
        } else {
            $count = substr_count($phrase, $letter);
            echo "<h2>La letra '$letter' aparece $count veces en la frase.</h2>";
        }
    }
    ?>
</body>
</html>
