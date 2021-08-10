<?php

$n = 10; // натуральное число

$lenghts = array();

$resultArray = array();

for($i = 1; $i <= $n; $i++){
	$numbers = array();
	
	do {
            $lenght = rand(1,100);
        } while (in_array($lenght, $lenghts));  

	for($j = 1; $j <= $lenght; $j++){
	    $numbers[] = rand(1,100);
	}
	$lenghts[] = $lenght;
	
	if(($i % 2) == 0){
	    sort($numbers);
	} else {
	    rsort($numbers);
	}

	$resultArray[] = $numbers;

}	

// вывод
foreach ($resultArray as $numbers){
	foreach ($numbers as $number){
		print $number;
		echo ' ';
	}
	echo '<br/><br/>';
}

?>
