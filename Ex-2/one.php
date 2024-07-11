<!-- Write a PHP program to print current month using if..else& switch case. -->
<?php
echo "using if else";
echo "get the current month as a number (1-12)";
$currentMonth = date("n"); 

if ($currentMonth == 1) {
    echo "The current month is January";
} elseif ($currentMonth == 2) {
    echo "The current month is February";
} elseif ($currentMonth == 3) {
    echo "The current month is March";
} elseif ($currentMonth == 4) {
    echo "The current month is April";
} elseif ($currentMonth == 5) {
    echo "The current month is May";
} elseif ($currentMonth == 6) {
    echo "The current month is June";
} elseif ($currentMonth == 7) {
    echo "The current month is July";
} elseif ($currentMonth == 8) {
    echo "The current month is August";
} elseif ($currentMonth == 9) {
    echo "The current month is September";
} elseif ($currentMonth == 10) {
    echo "The current month is October";
} elseif ($currentMonth == 11) {
    echo "The current month is November";
} else {
    echo "The current month is December";
}

echo "using if switch";

switch ($currentMonth) {
    case 1:
        echo "The current month is January";
        break;
    case 2:
        echo "The current month is February";
        break;
    case 3:
        echo "The current month is March";
        break;
    case 4:
        echo "The current month is April";
        break;
    case 5:
        echo "The current month is May";
        break;
    case 6:
        echo "The current month is June";
        break;
    case 7:
        echo "The current month is July";
        break;
    case 8:
        echo "The current month is August";
        break;
    case 9:
        echo "The current month is September";
        break;
    case 10:
        echo "The current month is October";
        break;
    case 11:
        echo "The current month is November";
        break;
    case 12:
        echo "The current month is December";
        break;
}

?>