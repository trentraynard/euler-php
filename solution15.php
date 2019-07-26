<?php
// Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down 
// How many such routes are there through a 20×20 grid?
$n1 = 40;
$n2 = 20;
$n3 = $n1 - $n2;

$fact1 = factorial($n1);
$fact2 = factorial($n2);
$fact3 = factorial($n3);

echo $fact1 / ($fact2 * $fact3);

function factorial($number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial = $factorial * $i;
    }
    return $factorial;
}
