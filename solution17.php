<?php
$numbers = array();
$words = array();
$sum = 0;

$numbers[1] = "one";
$numbers[2] = "two";
$numbers[3] = "three";
$numbers[4] = "four";
$numbers[5] = "five";
$numbers[6] = "six";
$numbers[7] = "seven";
$numbers[8] = "eight";
$numbers[9] = "nine";
$numbers[10] = "ten";
$numbers[11] = "eleven";
$numbers[12] = "twelve";
$numbers[13] = "thirteen";
$numbers[14] = "fourteen";
$numbers[15] = "fifteen";
$numbers[16] = "sixteen";
$numbers[17] = "seventeen";
$numbers[18] = "eighteen";
$numbers[19] = "nineteen";
$numbers[20] = "twenty";
$numbers[30] = "thirty";
$numbers[40] = "forty";
$numbers[50] = "fifty";
$numbers[60] = "sixty";
$numbers[70] = "seventy";
$numbers[80] = "eighty";
$numbers[90] = "ninety";

for ($i = 1; $i <= 1000; $i++) {
    $numberAsString = "";

    // how many thousands?
    $thousands = (int) ($i / 1000);
    $hundreds = (int) ($i / 100);
    $tens = ((int) ($i / 10)) % 10;
    $units = (int) ($i % 10);

    if ($thousands > 0) {
        $numberAsString .= $numbers[$thousands] . " thousand";
    }

    if ($hundreds > 0 && $hundreds < 10) {
        $numberAsString .= $numbers[$hundreds] . " hundred";

        if (($tens > 0 && $tens < 10) || $units > 0) {
            $numberAsString .= " and ";
        }
    }

    if ($tens == 1) {
        $numberAsString .= $numbers[($tens * 10) + $units];
    }

    if ($tens > 1 && $tens < 10) {
        $numberAsString .= $numbers[$tens * 10] . " ";
    }

    if ($units > 0 && $tens != 1) {
        $numberAsString .= $numbers[$units];
    }

    // strip out the spaces
    array_push($words, preg_replace('/\s/', "", $numberAsString));
}

foreach ($words as $word) {
    $sum += strlen($word);
}

echo $sum;
