<?php
// Function to calculate the factorial of a number
function factorial($number) {
    if ($number == 0) return 1;
    return $number * factorial($number - 1);
}

// Example usage
$number = 5; // You can change this value

$result = factorial($number);
echo "The factorial of " . $number . " is: " . $result;
?>
