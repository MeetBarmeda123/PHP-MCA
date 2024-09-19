<?php
// Function to calculate the sum of all numbers from 1 to 100
function sumOfNumbers($start, $end) {
    return array_sum(range($start, $end));
}

// Example usage
$start = 1;
$end = 100;

$sum = sumOfNumbers($start, $end);
echo "The sum of all numbers from " . $start . " to " . $end . " is: " . $sum;
?>
