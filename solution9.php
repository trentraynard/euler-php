<?php
// There exists exactly one Pythagorean triplet for which a + b + c = 1000.
// Find the product abc.
$a;
$b;
$c = 0;
$sum = 1000;

for ($a = 1; $a < $sum/3; $a++) {

    for ($b = $a + 1; $b <= $sum / 2; $b++) {
        $c = $sum - $a - $b;
        if ($a * $a + $b * $b == $c * $c) {
            echo "a= " . $a . " b= " . $b . " c=" . $c . "\n";
            echo "product = " . $a * $b * $c;
        }
    }
}
