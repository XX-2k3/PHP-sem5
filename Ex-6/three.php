<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// Example usage
$sortedArray = [1, 1, 2, 2, 3, 4, 4, 5, 5];
$uniqueArray = removeDuplicates($sortedArray);

echo "Original array: " . implode(', ', $sortedArray) . "\n";
echo "Array without duplicates: " . implode(', ', $uniqueArray) . "\n";
?>
