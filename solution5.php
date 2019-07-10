<?php
// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
$highest = 0;
$max = 20;
for ($n2 = 1;; $n2++) {
    for ($n1 = 1; $n1 <= $max; $n1++) {
        if ($n2 % $n1 !== 0) {
            #echo $n2. "breaking on " .$n1 . "\n";
            break;
        }

        if ($n1 == $max) {
            $highest = $n2;
            break 2;
        }
    }
}
echo $highest;
