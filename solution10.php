<?php
// The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
// Find the sum of all the primes below two million.
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
for ($i = 0; $i < 2000000; $i++) {
    if (isPrime($i)) {
        array_push($primeArray, $i);
    } else {
        continue;
    }
}
echo array_sum($primeArray);
