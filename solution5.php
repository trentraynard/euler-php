<?php

// 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
$highest = 0;
$lowest = 0;
$max = 10;
for($n2 = 1; $n2 < 6000; $n2++) {

    for ($n1=1; $n1 <= $max; $n1++) { 
        if($n2 % $n1 !== 0 ){
            #echo $n2. "breaking on " .$n1 . "\n";
            break;
        }
        
        if( $n1 == $max ) {
            $highest = $n2;
            
            if($lowest >= $highest){
                $lowest = $n2;
            }
        }
    } 
    
  
}

echo $lowest;
