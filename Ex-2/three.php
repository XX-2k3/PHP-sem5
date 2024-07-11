<!-- Write a PHP program for operators in PHP. -->
 <?php

// Arithmetic Operators
$a = 10;
$b = 5;

echo "Arithmetic Operators:<br>";
echo "a = $a, b = $b<br>";
echo "a + b = ". ($a + $b). "<br>";
echo "a - b = ". ($a - $b). "<br>";
echo "a * b = ". ($a * $b). "<br>";
echo "a / b = ". ($a / $b). "<br>";
echo "a % b = ". ($a % $b). "<br>";
echo "<br>";

// Assignment Operators
$c = 10;

echo "Assignment Operators:<br>";
echo "c = $c<br>";
$c += 5;
echo "c += 5, c = $c<br>";
$c -= 5;
echo "c -= 5, c = $c<br>";
$c *= 5;
echo "c *= 5, c = $c<br>";
$c /= 5;
echo "c /= 5, c = $c<br>";
$c %= 5;
echo "c %= 5, c = $c<br>";
echo "<br>";

// Comparison Operators
$d = 10;
$e = 5;

echo "Comparison Operators:<br>";
echo "d = $d, e = $e<br>";
echo "d == e: ". (($d == $e)? "True" : "False"). "<br>";
echo "d!= e: ". (($d!= $e)? "True" : "False"). "<br>";
echo "d > e: ". (($d > $e)? "True" : "False"). "<br>";
echo "d < e: ". (($d < $e)? "True" : "False"). "<br>";
echo "d >= e: ". (($d >= $e)? "True" : "False"). "<br>";
echo "d <= e: ". (($d <= $e)? "True" : "False"). "<br>";
echo "<br>";

// Logical Operators
$f = true;
$g = false;

echo "Logical Operators:<br>";
echo "f = $f, g = $g<br>";
echo "f && g: ". (($f && $g)? "True" : "False"). "<br>";
echo "f || g: ". (($f || $g)? "True" : "False"). "<br>";
echo "!f: ". ((!$f)? "True" : "False"). "<br>";
echo "!g: ". ((!$g)? "True" : "False"). "<br>";
echo "<br>";

// String Operators
$h = "Hello";
$i = "World";

echo "String Operators:<br>";
echo "h = $h, i = $i<br>";
echo "h. i = ". $h. $i. "<br>";
echo "<br>";

// Array Operators
$j = array("a", "b", "c");
$k = array("d", "e", "f");

echo "Array Operators:<br>";
echo "j = "; print_r($j); echo "<br>";
echo "k = "; print_r($k); echo "<br>";
echo "j + k = "; print_r($j + $k); echo "<br>";
echo "<br>";

?>