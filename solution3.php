<?php
// What is the largest prime factor of the number 600851475143 ?
function primeFactors($n)
{
    $p = 2;
    echo $n . "=";
    do {
        if ($n % $p == 0) {
            echo $p . "*";
            $n = $n / $p;
        } else {
            $p = $p + 1;
        }
    } while ($n >= $p * $p);
    echo $n;
}
primeFactors(600851475143);
