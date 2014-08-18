<?php




 // Add code here
function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    echo $a + $b . PHP_EOL;
}
	else {
		none_integer($a ,$b);
}
}
function subtract($a,$b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
}	else{
		none_integer($a ,$b);

}
}
		# code...

    

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;

}
	else {
		
		none_integer($a ,$b);
}
}
		# code...
	
    // Add code here

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b!=0){

		echo $a % $b . PHP_EOL;
}
	else{
		divide_by_zero($a , $b);
	}
	
}   // Add code here
	else {
		none_integer($a ,$b);

}
}
function modulus($a,$b){
	if(is_numeric($a) && is_numeric($b)) {
		if ($b!=0){

		echo $a % $b . PHP_EOL;
}
	else{
		divide_by_zero($a , $b);
	}
}
	else {
		none_integer($a ,$b);
}

}


Function divide_by_zero($a , $b){
	echo '$a is ' . $a . ' and $b is ' . $b ."   ";
	echo 'ERROR do not divide by Zero' . PHP_EOL;


}
Function none_integer($a , $b){
	echo '$a is ' . $a . ' and $b is ' . $b ."   ";
	echo 'ERROR  Non integer ' . PHP_EOL;
}

	add(1, 1);
	subtract(12,39);
	multiply(56,12);
	divide(29,12);
	modulus(12,3);


	// $a=12.5; $b=19;

	// add($a,$b);
	// subtract($a,$b);
	// multiply($a,$b);
	// divide($a,$b);
	// modulus($a,$b);










?>