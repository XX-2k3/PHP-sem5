<?php
$color = array('white', 'green', 'red', 'blue', 'black');
$text = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

foreach ($color as $c) {
    $text = str_replace($c, "<span style='color:$c;'>$c</span>", $text);
}

echo $text;
?>