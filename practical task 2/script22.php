<?php
// Function to calculate the area of a circle
function calculateCircleArea($radius) {
    return pi() * pow($radius, 2);
}

// Example usage
$radius = 7; // You can change this value

$area = calculateCircleArea($radius);
echo "The area of the circle with radius " . $radius . " is: " . $area;
?>
