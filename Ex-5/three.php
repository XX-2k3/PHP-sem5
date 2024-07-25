<?php

$user_input = "10,20,30,40,50"; // Simulated user input

$array = explode(',', $user_input);

$reversed_array = array_reverse($array);

echo "The reversed array values are: <br>";
foreach ($reversed_array as $value) {
    echo $value . "<br>";
}
?>
