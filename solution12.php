<?php
// What is the value of the first triangle number to have over five hundred divisors?

// $limit = 500;
// $num = 1;
// $triangleNumbers = array();
// for ($i = 1; $i <= 30000000; $i++) {
//     $num = $i * ($i + 1) / 2;
//     $triangleNumbers[] =  $num;
//     $num += 1;   

// }
// $max = sqrt(count($triangleNumbers));
// for ($k=0; $k < $max; $k++) { 
//     $divisors = 1;
//     for ($j=1; $j < $triangleNumbers[$k] ; $j++) { 
//         if($triangleNumbers[$k] % $j == 0){
//             $divisors = $divisors + 1;
//             // echo "number:".$triangleNumbers[$k]. "\n";
//             // echo "Div=" .$divisors . "\n";
//         }
//         if($limit <= $divisors){
//             echo "FOUND FIRST" . $triangleNumbers[$k];
//             break 2;

//         }
//     }
   
// }
$limit = 500;
$counter=1;

do {
	$currentTriangle = getTriangle($counter);

	$countFactors = getCountFactors($currentTriangle);
	
	$counter++;
} while ($countFactors <= $limit);

echo $currentTriangle;


function getTriangle($number) {
	return $number * ($number + 1) / 2;
}


function getCountFactors($number) {
	$countFactors = 0;
	$root = sqrt($number);
	
	for ($i = 1; $i <= $root; $i++) {
		if ($number % $i == 0) {
			$countFactors += 2;
		}
	}
	
	return $countFactors;
}