<?php
$min = 1; 
$max = 10;
function closestTOPi($rightn , $leftn , $d){
    $right_diff = abs($rightn/$d - pi());
    $left_diff = abs($leftn/$d - pi());
    $common_fraction = min($right_diff ,  $left_diff) == $right_diff ?[$rightn, $d] : [$leftn , $d];
    return  $common_fraction; 
}

function fractionClosestTOPi($fraction1 , $fraction2){
    $fraction1_diff = abs($fraction1[0]/$fraction1[1] - pi());
    $fraction2_diff = abs($fraction2[0]/$fraction2[1] - pi());
    
    $closest_fraction = min($fraction1_diff , $fraction2_diff) === $fraction1_diff ? 'fraction1':'fraction2';
    return $$closest_fraction;
    
}
function fractionClosestTOPiBool($fraction1 , $fraction2){
	return $fraction1 === fractionClosestTOPi($fraction1 , $fraction2);
}

define("PI", pi());

$leftn = intval($min*PI);
$rightn = $leftn+1; 
$min_fraction = closestTOPi($leftn , $rightn , $min);
$previous_fraction = $min_fraction;

	echo("$d)current_fraction:$min_fraction[0]/$min_fraction[1] closer than  $previous_fraction[0]/$previous_fraction[1] |". fractionClosestTOPiBool($min_fraction ,$previous_fraction).PHP_EOL);
for ($d = $min+1 ; $d <= $max ; $d++){
    $leftn  = intval($d*PI);
    $rightn = $leftn+1; 
    $current_fraction = closestTOPi($leftn , $rightn , $d);

    $min_fraction = fractionClosestTOPi( $min_fraction , $current_fraction);
    //echo(abs( ($n/$d)-PI ).PHP_EOL);
    //$max = max($max , fabs())
    
	echo("$d)current_fraction:$current_fraction[0]/$current_fraction[1] closer than  $previous_fraction[0]/$previous_fraction[1] |". fractionClosestTOPiBool($current_fraction ,$previous_fraction).PHP_EOL);

    $previous_fraction = $current_fraction;

}
echo("min) $min_fraction[0]/$min_fraction[1] = ".$min_fraction[0]/$min_fraction[1].PHP_EOL);
