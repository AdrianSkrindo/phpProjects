<?php

echo "<pre>\n";
$input = explode("\n",trim(str_replace("\r","",file_get_contents("input4.txt"))));

$part1 = 0;
$part2 = 0;
foreach($input as $line) {
	preg_match("#(\d+)\-(\d+),(\d+)\-(\d+)#", $line, $ranges);
	if(($ranges[1]>=$ranges[3]&&$ranges[2]<=$ranges[4])||($ranges[3]>=$ranges[1]&&$ranges[4]<=$ranges[2])) {
		$part1++;
	}
	if(
		($ranges[1]>=$ranges[3]&&$ranges[1]<=$ranges[4])||
		($ranges[2]>=$ranges[3]&&$ranges[2]<=$ranges[4])||
		($ranges[3]>=$ranges[1]&&$ranges[3]<=$ranges[2])||
		($ranges[4]>=$ranges[1]&&$ranges[4]<=$ranges[2])) {
		$part2++;
	}
}

echo "\n\nPart 1: " . $part1;
echo "\n\nPart 2: " . $part2;


?>