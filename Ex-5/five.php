<?php
function findGreatest($num1, $num2, $num3) {
    $greatest = ($num1 > $num2) 
        ? (($num1 > $num3) ? $num1 : $num3)
        : (($num2 > $num3) ? $num2 : $num3);
    
    return $greatest;
}

$user_input = "10,20,15"; // This could be input from a form, for example
$values = explode(',', $user_input);

if (count($values) == 3) {
    $num1 = (int)$values[0];
    $num2 = (int)$values[1];
    $num3 = (int)$values[2];

    $greatest = findGreatest($num1, $num2, $num3);
    echo "The greatest number among $num1, $num2, and $num3 is: $greatest";
} else {
    echo "Please provide exactly three numbers.";
}
?>
