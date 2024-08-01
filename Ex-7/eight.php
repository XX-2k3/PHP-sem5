<?php
$str = 'the quick brown fox jumps over the lazy dog.';
$new_str = preg_replace('/\bthe\b/', 'That', $str, 1);
echo $new_str;
?>
