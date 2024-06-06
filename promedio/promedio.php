<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio de Notas</title>
</head>
<body>
    <h1>Calculadora de Promedio de Notas</h1>
    <form method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" step="any" name="nota1" id="nota1" required>
        <br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" step="any" name="nota2" id="nota2" required>
        <br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" step="any" name="nota3" id="nota3" required>
        <br><br>

        <input type="submit" name="calcular" value="Calcular Promedio">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $promedio = ($nota1 + $nota2 + $nota3) / 3;

        echo "<h2>El promedio de las tres notas es: " . number_format($promedio, 2) . "</h2>";
    }
    ?>
</body>
</html>
