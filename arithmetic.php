<?php




 // Add code here
function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    return $a + $b . PHP_EOL;
	}
	else {
		none_integer($a ,$b);
	}

 }
function subtract($a,$b) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a - $b . PHP_EOL;
}	else{
		none_integer($a ,$b);

}
}
// 		# code...

    

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;

} else {
		
		none_integer($a ,$b);
}
}
// 		# code...
	
//     // Add code here

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b!=0){

		return $a / $b . PHP_EOL;
}
	else{
		divide_by_zero($a , $b);
	}
	
}   // Add code here
// 	else {
// 		none_integer($a ,$b);

}

function modulus($a,$b){
	if(is_numeric($a) && is_numeric($b)) {
		if ($b!=0){

		return $a % $b . PHP_EOL;
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
	// echo add(1,1);

	 $addition = add(1 , 1);
	 echo $addition;

	 $subtraction = subtract(12,39);
	 echo $subtraction;

	 $multiply = multiply(56,12);
	 echo  $multiply;

	 $divide = divide(29,12);
	 echo $divide;

	 $modulus = modulus(12,3);
	 echo $modulus;


	// $a=12; $b=3;

	// add($a,$b);
	// subtract($a,$b);
	// multiply($a,$b);
	// divide($a,$b);
	// modulus($a,$b);










?>