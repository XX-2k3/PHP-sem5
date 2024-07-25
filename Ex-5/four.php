<?php

$array1 = ["apple", "banana", "cherry"];

$array2 = ["date", "fig", "grape"];

$merged_array = array_merge($array1, $array2);

echo "The merged array is: <br>";
foreach ($merged_array as $value) {
    echo $value . "<br>";
}
?>
