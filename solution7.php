<?php
// By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13,
// we can see that the 6th prime is 13.

// What is the 10 001st prime number?
function isPrime($num)
{
    if ($num == 1)
        return false;

    if ($num == 2)
        return true;

    if ($num % 2 == 0) {
        return false;
    }

    $ceil = ceil(sqrt($num));
    for ($i = 3; $i <= $ceil; $i = $i + 2) {
        if ($num % $i == 0)
            return false;
    }

    return true;
}
$primeArray = array();
for ($i = 0; $i < 200000; $i++) {
    if (isPrime($i)) {
        array_push($primeArray, $i);
    } else {
        continue;
    }
}

echo $primeArray[10000];
