<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) return false;
    if ($number == 2) return true;
    if ($number % 2 == 0) return false;
    for ($i = 3; $i <= sqrt($number); $i += 2) {
        if ($number % $i == 0) return false;
    }
    return true;
}

// Example usage
$number = 29; // You can change this value

if (isPrime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is not a prime number.";
}
?>
