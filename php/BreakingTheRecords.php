<?php

function breakingRecords($scores) {
	// Write your code here
	$best_record_records = 0;

		$min = $scores[0];
		$max = $scores[0];
	$worst_record_records = 0;
	foreach($scores as $score){
		if($max < $score) {
			$best_record_records +=1;
			$max = $score;
		}
		if($min > $score) {
			$worst_record_records +=1;
			$min = $score;
		}
	}	
	return ['best'=>$best_record_records ,'worst'=> $worst_record_records];
}

$results = breakingRecords([3 ,4 ,21, 36, 10, 28 ,35, 5 ,24 ,42]);
echo "best:". $results['best'].", worst:". $results['worst'].PHP_EOL;
