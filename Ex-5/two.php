<?php
$user_input = "10,20,30,40,50"; // Simulated user input, normally from $_POST or $_GET

$array = explode(',', $user_input);

echo "The values of the array are: <br>";
foreach ($array as $value) {
    echo $value . "<br>";
}
?>
