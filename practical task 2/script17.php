<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    return ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0));
}

// Example usage
$year = 2024; // You can change this value

if (isLeapYear($year)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}
?>
