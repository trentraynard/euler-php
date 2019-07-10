<?php
// Find the difference between the sum of the squares of the first 
// one hundred natural numbers and the square of the sum.
$sumOfSquare = 0;
$squareOfSum = 0;
for ($i=0; $i <= 100 ; $i++) { 
    $sumOfSquare += $i * $i;
    $squareOfSum += $i;
}
$difference = ($squareOfSum * $squareOfSum) - $sumOfSquare;
echo $difference. "\n";
