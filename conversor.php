<?php

$binaryArray = array(0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$result = convertBinary($binaryArray);
echo $result;

function convertBinary($data) {

	if (count($data) != 32) {
		return "the array does not have the amount of necessary items";
	}

	if (!preg_match('~^[01]+$~', implode($data))) {
		return "There is an error in one or more of the numbers entered";
	}

	$fraction = array_slice($data, 9, 23);
	$sign = $data[0];
	$exponent = array_slice($data, 1, 8);
	array_unshift($fraction, 1);
	$exponent = bindec(implode($exponent)) - 127;

	$base = 0;

	for ($i = 0; $i < 24; $i++) {
		$base += (1 / pow(2, $i)) * $fraction[$i];
	}

	$result = $base * pow(2, $exponent) * ($sign * -2 + 1);
	return $result;

}
 