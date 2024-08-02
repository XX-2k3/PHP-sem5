<?php
$x = array(1, 2, 3, 4, 5);
echo "Original array:\n";
var_dump($x);

unset($x[3]); // Remove the element with value 4
$x = array_values($x); // Reindex array

echo "Array after deletion:\n";
var_dump($x);
?>
