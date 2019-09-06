<?php
//By starting at the top of the triangle below and moving to adjacent numbers on the row below
//Find the maximum total from top to bottom of the triangle below:
// $triangle = <<<GRID
// 75
// 95 64
// 17 47 82
// 18 35 87 10
// 20 04 82 47 65
// 19 01 23 75 03 34
// 88 02 77 73 07 63 67
// 99 65 04 28 06 16 70 92
// 41 41 26 56 83 40 80 70 33
// 41 48 72 33 47 32 37 16 94 29
// 53 71 44 65 25 43 91 52 97 51 14
// 70 11 33 28 77 73 17 78 39 68 17 57
// 91 71 52 38 17 14 91 43 58 50 27 29 48
// 63 66 04 68 89 53 67 30 73 16 69 87 40 31
// 04 62 98 27 23 09 70 98 73 93 38 53 60 04 23
// GRID;


// $lines = explode("\r\n", $triangle);
// $sum = 0;
// $position = 0;
// for ($i = 0; $i <= count($lines); $i++) {
//     // Add first line to sum
//     if ($i === 0) {
//         $sum += $lines[0];
//         $position = 1;
//     }
//     if ($i === 1) {
//         echo $lines[$i];

//     }

// }
#echo $sum . "\n";


// table = [map(int, s.split()) for s in open('pe18.txt').readlines()]

// for row in range(len(table)-1, 0, -1):
//     for col in range(0, row):
//         table[row-1][col] += max(table[row][col], table[row][col+1])

// print "Maximum top-bottom total in triangle", table[0][0]





$triangle = json_decode(file_get_contents('triangle.json'));

$memory = [];
function maxValue($r, $c) {
	global $triangle, $memory;
	if (array_key_exists($r, $memory) && array_key_exists($c, $memory[$r])) {
		return $memory[$r][$c];
	}
	if ($r == count($triangle) - 1) {
		return $triangle[$r][$c];
	}
	$optionA = maxValue($r + 1, $c);
	$optionB = maxValue($r + 1, $c + 1);
	$memory[$r][$c] = $triangle[$r][$c] + ($optionA > $optionB ? $optionA : $optionB);
	return $memory[$r][$c];
}
echo maxValue(0, 0);