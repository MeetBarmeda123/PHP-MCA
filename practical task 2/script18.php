<?php
// Function to generate a random number between 1 and 10
function generateRandomNumber() {
    return rand(1, 10);
}

// Function to check if the guess is correct
function checkGuess($randomNumber, $guess) {
    return $randomNumber == $guess;
}

// Example usage
$randomNumber = generateRandomNumber();
$userGuess = 5; // You can change this value or get it from user input

if (checkGuess($randomNumber, $userGuess)) {
    echo "Congratulations! You guessed the number correctly.";
} else {
    echo "Sorry, the correct number was " . $randomNumber . ".";
}
?>
