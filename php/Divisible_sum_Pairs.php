<?php
function divisibleSumPairs($n, $k, $ar) {
    // Write your code here
	$pairs = 0;
	echo "k = $k".PHP_EOL;
    for ( $i=0; $i<$n-1; $i++ )
    {
       echo "i = $i --------".PHP_EOL; 
        for ($j=$i+1 ; $j<$n; $j++){
            echo "j = $j , ar[i]+ar[j] = ".(($ar[$i]+$ar[$j]) % $k).PHP_EOL; 
            if($ar[$i]+$ar[$j] % $k === 0){
                $pairs++;
            }
        }
    }
    
    return $pairs;

}

$n = 6;
$k = 3;
$ar = [1,3,2,6,1,2];

echo divisibleSumPairs($n,$k,$ar).PHP_EOL;


