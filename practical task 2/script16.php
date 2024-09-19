<?php
// Function to count the number of vowels in a sentence
function countVowels($sentence) {
    return preg_match_all('/[aeiouAEIOU]/', $sentence);
}

// Example usage
$sentence = "This is a sample sentence.";

$vowelCount = countVowels($sentence);
echo "The number of vowels in the sentence is: " . $vowelCount;
?>
