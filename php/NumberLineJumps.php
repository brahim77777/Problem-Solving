<?php 

// First 
//x1 => start of p1 
//v1 => steps of p1
//x2 => start of p2
//v2 => steps of v2
function kangaroo($x1, $v1, $x2, $v2) {

    // Write your code here
	if( $x1 > $x2 and $v1 > $v2 ){
		echo "NO\n";
		return ;
	}
	if ($x2 > $x1 and $v2 > $v1){
		echo "NO\n";
		return ;
	}

	if($x2 == $x1 and $v2 != $v1 ) {
		echo "NO\n";
		return ;
	}

	$steps =  ($x1-$x2)/($v2-$v1);
	if($steps != intval($steps)) echo "NO";
	#some random comment just because i feel to do so ! , that's it nothing more nothing less ! , i have several exams after tomorrow ! , i should prepare for those exams , espicialy 3amo hafdi lah yhdina w yhdih , amin.
	if( $x1+($v1*$steps) == $x2+($v2*$steps) ) echo "YES\n";
	else echo"NO\n";

}

//kangaroo(0, 2 ,5 ,3);
kangaroo($argv[1] , $argv[2], $argv[3] , $argv[4]);

