<?php




//  // Add code here
// function add($a, $b) {
//     echo $a + $b . PHP_EOL;
// }

// function subtract($a, $b) {
//     echo $a - $b . PHP_EOL;
// }

// function multiply($a, $b) {
// 	echo $a * $b . PHP_EOL;

// 		# code...
	
//     // Add code here
// }

// function divide($a, $b) {
// 	echo $a / $b . PHP_EOL;
//     // Add code here

// }
// function modulus($a,$b){
// 	echo $a % $b . PHP_EOL;

// }





// 	add(21,2);
// 	subtract(122,39);
// 	multiply(99,12);
// 	divide(123,14);
// 	modulus(12,3);


// 	$a=12.5; $b=19;

// 	add($a,$b);
// 	subtract($a,$b);
// 	multiply($a,$b);
// 	divide($a,$b);
// 	modulus($a,$b);




function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}




?>