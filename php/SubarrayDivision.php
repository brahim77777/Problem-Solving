<?php


function birthday($s, $d, $m) {
	// Write your code here
	$answers = 0;
   for($i = 0 ; $i <= count($s)-$m; $i++){
       $sum = 0; 
		for($j=$i ; $j<$m+$i ; $j++){
		       	$sum +=$s[$j];	
		}
		if($sum == $d) $answers+=1;

	}
	return $answers;

}

$s = [1, 2, 1, 3, 2];
$d = 3;
$m = 2;


echo birthday($s, $d, $m).PHP_EOL;
