<?php
// Function to swap two numbers using arithmetic operators
function swap(&$a, &$b) {
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
}

// Example usage
$a = 5; // You can change these values
$b = 10;

swap($a, $b);
echo "After swapping: a = " . $a . ", b = " . $b;
?>
