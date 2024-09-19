<?php
// Function to find the largest of three numbers
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

// Example usage
$num1 = 15; // You can change these values
$num2 = 22;
$num3 = 18;

$largest = findLargest($num1, $num2, $num3);
echo "The largest number among " . $num1 . ", " . $num2 . ", and " . $num3 . " is: " . $largest;
?>
