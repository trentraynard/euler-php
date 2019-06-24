<?php
## FIRST ATTEMPT ##
$fib = array(0,1);
for($i=0;;$i++) { 
    $sum = $fib[$i] + $fib[$i+1];
    if($sum >= 4000000){
        break;
    }
    if($sum % 2 === 0){
    $total[] = $sum;
    }
    $fib[] = $sum; 
}
$total_sum = array_sum($total); 
echo "Total sum : ". $total_sum ;


## REVISION ##
// $x=0;
// $f1=1;
// $f2=2;
// for($i=1;;$i++) {
//   if($f2>=4000000) { break; }
//   $ftemp=$f1+$f2;
//   $f1=$f2;
//   $f2=$ftemp;
//   if($f1%2==0) { $x=$x+$f1; }
// }
// echo $x;
