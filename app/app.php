<!DOCTYPE html>
<html>
<head>
    <title>Calculadora en PHP</title>
</head>
<body>
    <h2>Calculadora Básica en PHP</h2>
    <form method="post">
        Número 1: <input type="number" name="num1" step="any" required><br><br>
        Operación:
        <select name="operacion">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">*</option>
            <option value="division">/</option>
        </select><br><br>
        Número 2: <input type="number" name="num2" step="any" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 == 0) {
                    echo "<p style='color:red;'>Error: División por cero</p>";
                    exit;
                }
                $resultado = $num1 / $num2;
                break;
            default:
                echo "<p style='color:red;'>Operación no válida</p>";
                exit;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
