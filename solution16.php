<?php
// What is the sum of the digits of the number 2^1000?
$x = 0;
$y = bcpow(2, 1000);
$length = strlen($y);

for ($i = 0; $i < $length; $i++) {
	$x += substr($y, $i, 1);
}

echo $x;
