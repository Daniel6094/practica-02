<!DOCTYPE html>
<html>
<head>
    <title>Calculadora en PHP</title>
</head>
<body>
    <h1>Calculadora </h1>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" step="any" name="num1" id="num1" required>
        <br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" step="any" name="num2" id="num2" required>
        <br><br>
        
        <label for="operation">Operación:</label>
        <select name="operation" id="operation">
            <option value="sum">Suma</option>
            <option value="sub">Resta</option>
            <option value="mul">Multiplicación</option>
            <option value="div">División</option>
        </select>
        <br><br>
        
        <input type="submit" name="calculate" value="Calcular">
    </form>
    
    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'sum':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                if ($num2 == 0) {
                    $result = 'Error: No se puede dividir por cero.';
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = 'Operación no válida.';
                break;
        }

        echo "<h2>Resultado: $result</h2>";
    }
    ?>
</body>
</html>
