<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);

$lowest = array_slice($temperatures, 0, 5);
$highest = array_slice($temperatures, -5);

echo "Average Temperature is : " . number_format($average, 1) . "\n";
echo "List of five lowest temperatures : " . implode(', ', $lowest) . "\n";
echo "List of five highest temperatures : " . implode(', ', $highest) . "\n";
?>
