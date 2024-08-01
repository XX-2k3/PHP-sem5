<?php
$str = '082307';
$formatted_str = substr($str, 0, 2) . ':' . substr($str, 2, 2) . ':' . substr($str, 4, 2);
echo $formatted_str;
?>
