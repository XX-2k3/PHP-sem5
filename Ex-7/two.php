<?php
$string = 'The quick brown fox jumps over the lazy dog.';
$search = 'jumps';

if (strpos($string, $search) !== false) {
    echo 'The string contains the substring.';
} else {
    echo 'The string does not contain the substring.';
}
?>
