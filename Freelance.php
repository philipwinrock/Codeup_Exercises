<?php


	
//$array = array('1955 Chevy' , 'Yellow Submarine' , 'Old Man');
//$array2 = ['1955 Chevy' , 'Yellow Submarine' , 'Old Man'];


//var_dump ($array);
//print_r($array2);




$cars=[
	'make' => 'value',
	'location' => 'price',
	'available'=> 'delivery'

];

// print_r($cars);


foreach ($cars as $key => $value) {
	//echo $key . ' ' . $value . PHP_EOL;
	// echo "$value" . PHP_EOL;
	$newString .= $value . PHP_EOL;
}


echo "$newString" . PHP_EOL;




?>