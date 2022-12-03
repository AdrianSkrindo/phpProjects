<?php

// Advent of Code 2022 - Day 3: Rucksack Reorganization

$data = file_get_contents('d3-input.txt');
$arr_data = preg_split('/\n+/', $data, -1, PREG_SPLIT_NO_EMPTY);
$total1 = 0;
$total2 = 0;

function char_value(string $char)
{
	return ord($char)>=97?ord($char) - ord('a')+1:ord($char) - ord('A')+27;
}

// Part 1
foreach ($arr_data as $rucksack) {
	$middle = floor(strlen($rucksack) / 2);
	$string1 = str_split(substr($rucksack, 0, $middle));
	$string2 = str_split(substr($rucksack, $middle));
	$result = array_intersect($string1, $string2);
	$total1 += char_value(implode($result));
}
 
echo $total1;
echo "<br>";




for ($i=0; $i < count($arr_data) ; $i+=3) { 
	$string1 = str_split($arr_data[$i]);
	$string2 = str_split($arr_data[$i+1]);
	$string3 = str_split($arr_data[$i+2]);
	$result = array_intersect($string1, $string2, $string3);
	$total2 += char_value(implode($result));
}
 
echo $total2;