<?php
$array = array(1, 2, 3, 4, 5);
$newItem = '$';
$position = 3; // Position where to insert the new item

echo "Original array : " . implode(' ', $array) . "\n";

array_splice($array, $position, 0, $newItem);

echo "After inserting '$' the array is : " . implode(' ', $array) . "\n";
?>
