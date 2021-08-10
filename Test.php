<?php

$n = 5; // натуральное число

$lenghts = array();

$resultArray = array();

for($i = 1; $i <= $n; $i++){
	$array = array();
	
	do {
      $rand = rand(1,100);
    } while (in_array($rand,$lenghts));  

	for($j = 1; $j <= $rand; $j++){
	    $array[] = rand(1,100);
	}
	$lenghts[] = count($array);
	
	if(($i % 2) == 0){
	   sort($array);
	} else {
	   rsort($array);
	}

	$resultArray[] = $array;

}	

// вывод
foreach ($resultArray as $array){
	foreach ($array as $number){
		print $number;
		echo ' ';
	}
	echo '<br/><br/>';
}

?>
