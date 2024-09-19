<?php
// Function to check if a number is a palindrome
function isPalindrome($number) {
    $str = (string)$number;
    return $str === strrev($str);
}

// Example usage
$number = 12321; // You can change this value

if (isPalindrome($number)) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>
