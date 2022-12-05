<?php

$data = file_get_contents('input5.txt');
			
$parts = explode("\r\n\r\n", $data); 

$stackDiagram = $parts[0];
$moves = explode("\r\n",$parts[1]);

$stackRows = explode("\r\n",$stackDiagram);
$lastRow = array_pop($stackRows);

$stacks = []; 
foreach($stackRows as $row){
	$currStack = 0; 
	for($i = 0; $i < strlen($row); $i += 4){
		$item = substr($row,$i,3);  
		
		$stacks[$currStack][] = trim($item); 
		$currStack += 1;
	}
}

$stacks = array_map('array_values',array_map('array_filter',$stacks));

foreach($moves as $move){
	preg_match("/move (\d+) from (\d+) to (\d+)/",$move,$matches); 
	
	$numMoved = $matches[1];
	$stack1 = $matches[2]; 
	$stack2 = $matches[3];
	
	$elems = array_splice($stacks[$stack1 - 1],0,$numMoved);
	$stacks[$stack2 - 1] = array_merge($elems, $stacks[$stack2 - 1]);
}

$str = []; 
foreach($stacks as $s){
	$str[] = trim($s[0],"[]");
}

//$this->out(implode("",$str));

?>