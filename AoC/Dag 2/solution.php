<?php

$strategi = trim(file_get_contents('input2.txt'),chr(0x0D).chr(0x0A).' ');
$lines = explode("\n",$strategi);

// Rock defeats Scissors, Scissors defeats Paper, and Paper defeats Rock
// A for Rock, B for Paper, and C for Scissors
// X for Rock, Y for Paper, and Z for Scissors
// score = shape selected : (1 for Rock, 2 for Paper, and 3 for Scissors) plus the score for the outcome of the round (0 if you lost, 3 if the round was a draw, and 6 if you won)

$scores = array('A'=>1, 'B'=>2, 'C'=>3,'X'=>1, 'Y'=>2, 'Z'=>3,'A X'=> 3,'A Y'=> 6,'A Z'=> 0,'B X'=> 0,'B Y'=> 3,'B Z'=> 6,'C X'=> 6,'C Y'=> 0,'C Z'=> 3);

$score = 0;
foreach ($lines as $idx => $line) {
	$line = substr($line,0,3);
	$score += $scores[$line] + $scores[substr($line,2,1)];
}
echo "Løsning 1 = $score \n";
echo "<br>";
$score = 0;
foreach ($lines as $idx => $line) {
	$line = substr($line,0,3);
	$enemy = substr($line,0,1);
	$result = substr($line,2,1);
	$player = '';
	if ($result=='X') { // lose
		if ($enemy=='A') $player = 'Z';
		if ($enemy=='B') $player = 'X';
		if ($enemy=='C') $player = 'Y';
	}
	if ($result=='Y') { // draw
		if ($enemy=='A') $player = 'X';
		if ($enemy=='B') $player = 'Y';
		if ($enemy=='C') $player = 'Z';
	}
	if ($result=='Z') {	// win
		if ($enemy=='A') $player = 'Y';
		if ($enemy=='B') $player = 'Z';
		if ($enemy=='C') $player = 'X';
	}
	$score += $scores[$player] + $scores[$enemy.' '.$player];
}
echo "Løsning 2 = $score \n";

?>