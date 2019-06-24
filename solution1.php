<?php
$total = 0;
for ($i=1; $i < 1000; $i++) { 
   if( !($i % 5) || !($i % 3) ) {
    $total += $i ;
   }
}
echo $total;