<?php
function createPyramid($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

// Example usage
$rows = 5;
createPyramid($rows);
?>
