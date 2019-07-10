<?php
// Find the sum of all the multiples of 3 or 5 below 1000.
$total = 0;
for ($i=1; $i < 1000; $i++) { 
   if( !($i % 5) || !($i % 3) ) {
    $total += $i ;
   }
}
echo $total;