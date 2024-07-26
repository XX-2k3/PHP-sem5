<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post" action="">
        <label for="number1">Number 1:</label><br>
        <input type="number" id="number1" name="number1" required><br><br>

        <label for="number2">Number 2:</label><br>
        <input type="number" id="number2" name="number2" required><br><br>

        <label for="operator">Select Operator:</label><br>
        <select id="operator" name="operator">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    function calculate($a, $b, $operator) {
        switch ($operator) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Error: Division by zero.";
                }
            default:
                return "Invalid operator.";
        }
    }

    if (isset($_POST['calculate'])) {
        $a = $_POST['number1'];
        $b = $_POST['number2'];
        $operator = $_POST['operator'];
        $result = calculate($a, $b, $operator);

        echo "<h3>Result: $a $operator $b = $result</h3>";
    }
    ?>
</body>
</html>
