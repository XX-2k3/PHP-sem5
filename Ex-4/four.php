<?php
function calculator($a, $operator , $b) {
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

// Example usage
$a = 12;
$b = 4;
$operator = '+';
$result = calculator($a,$operator, $b);
echo "Result of $a $operator $b is $result.\n";
?>
