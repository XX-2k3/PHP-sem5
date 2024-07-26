<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen((string)$number);

    while ($temp > 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $digits);
        $temp = (int)($temp / 10);
    }

    return $sum === $number;
}

// Example usage
$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}
?>
