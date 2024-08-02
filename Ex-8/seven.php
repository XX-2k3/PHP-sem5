<?php
$assocArray = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

// a) Ascending order sort by value
asort($assocArray);
echo "Ascending order by value:\n";
print_r($assocArray);

// b) Ascending order sort by key
ksort($assocArray);
echo "Ascending order by key:\n";
print_r($assocArray);

// c) Descending order sort by value
arsort($assocArray);
echo "Descending order by value:\n";
print_r($assocArray);

// d) Descending order sort by key
krsort($assocArray);
echo "Descending order by key:\n";
print_r($assocArray);
?>
