<?php
//It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms.
//  Although it has not been proved yet (Collatz Problem), it is thought that all starting numbers
//  finish at 1.

// Which starting number, under one million, produces the longest chain?

function collatzSequence($number)
{
    $cnt = 1;
    for ($i = 0;; $i++) {
        if ($number % 2 == 0) {
            // Even (n/2)
            $number = $number / 2;
            $cnt++;
            if ($number == 1) {
                return $cnt;
                
            }
        } else {
            // odd (3n +1)
            $number = 3 * $number + 1;
            $cnt++;
            if ($number == 1) {
                return $cnt;
                
            }
        }
    }
}
$max= 0;
for ($i=1; $i < 1000000; $i++) { 
   
    $chain = collatzSequence($i);
    if($chain > $max){
        $max = $chain;
        echo "NUMBER: " .$i;
        echo " max: " .$max ."\n";
    }

}

