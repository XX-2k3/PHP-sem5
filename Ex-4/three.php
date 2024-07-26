<?php
function findLargest($a, $b) {
    if ($a > $b) {
        return $a;
    } elseif ($b > $a) {
        return $b;
    } else {
        return "Both numbers are equal.";
    }
}

// Example usage
$a = 10;
$b = 20;
$largest = findLargest($a, $b);
echo "The largest number between $a and $b is $largest.\n";
?>
