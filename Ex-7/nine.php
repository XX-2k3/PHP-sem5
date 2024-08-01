<?php
function findFirstDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
        }
    }
    return "No difference found or strings are identical up to the length of the shorter string.";
}

$string1 = 'football';
$string2 = 'footboll';
echo findFirstDifference($string1, $string2);
?>
