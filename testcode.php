<?php
// 			//students and their ages//
// $students = array(
//     array('name' => 'Virginia Potts', 'age' => 29),
//     array('name' => 'Elon Musk', 'age' => 12),
//     array('name' => 'Rasmus Lerdorf', 'age' => 45),
//     array('name' => 'Marissa Mayer', 'age' => 18)
// );
//     //loop through students name and age//
// foreach ($students as $student) {
//     echo "{$student['name']} is {$student['age']} years old.\n";
// }

	
	// do {
 //    echo "$a\n";
    

$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $key => $value) {
    echo ("value has a key of {$key} and a value of {$value}\n");
}










 //    $a++;
    

	// }while ($a <= 100 / 30);


	//      for($a = 1; $a <= 100 ; $a++) {

	// 	if(($a % 3 == 0) && ($a % 5 == 0)) {
	// 		echo "$a - FIZZBUZZ" .  PHP_EOL;				
	// 	}
	// 	elseif ($a % 3 == 0) {
	// 		echo  "$a - FIZZ " . PHP_EOL;
	// 	}
	// 	elseif ($a % 5 == 0) {
	// 		echo "$a - BUZZ ". PHP_EOL;
	// 	}
	// 	else  {
	// 		echo "$a" . PHP_EOL;
	// 	}
			
	// }
	











// for ($a = 1; $a <= 100; $a += 2) {
//     echo "\$a has a value of {$a}\n";
// }




// // Write the output
// // Notice the space after the ?
// fwrite(STDOUT, 'What is your first name? ');

// // Get the input from user
// $first_name = fgets(STDIN);

// // Output the user's name
// fwrite(STDOUT, "Hello $first_name\n");



 





			// $b = 10; $c = "10";

			// 		if ($b === $c) {
			// 			# code...
			// 			echo "$b is identical to $c" . PHP_EOL;
			// 		} 

			// 	else  {
			// 		echo "$b is not identical to $c with qoutes"  . PHP_EOL;

			// 	}
					
					

				 // $a=10; $b='10';
				                        // Shorten the next 2 statements into an if/else
				// if ($a === $b) {
				//                              // output the appropriate result
				// echo "$a is identical to $b" .  PHP_EOL;
				// }
				// else           {
				// 	echo '$a is not identical to $b'  . PHP_EOL; 
				// }



				// if ($b == $a) {
				//     // output the appropriate result
				//     echo "$b is equal to $a" . PHP_EOL;
				// }

				// // Shorten the next 2 statements into an if/else
				// if ($b >= $c) {
				//     // output the appropriate result
				//     echo "$b is ____ $c\n";
				// }

				// if ($b <= $c) {
				//     // output the appropriate result
				//     echo "$b is ____ $c\n";
				// }

				// // combine the next 4 conditionals into 
				// // one if/else/elseif block that checks in order for:
				// // identical, equal, not identical, not equal
				// if ($b == $c) {
				//     // output the appropriate result
				//     echo "$b is equal to $c";
				// }

				// if ($b === $c) {
				//     // output the appropriate result
				//     echo "$b is identical to $c";
				// }

				// if ($b != $c) {
				//     // output the appropriate result
				//     echo "$b is not equal to $c";
				// }

				// if ($b !== $c) {
				//     // output the appropriate result
				//     echo "$b is not identical to $c";
				// }

				
			







// switch(gettype($value)) {
//     case 'string':
//         echo '$value is a string';
//         break;
//     default:
//         echo '$value is not a string';
//         break;
// }







                             // $a = 10;
                            // echo ++$a .PHP_EOL;
                             // echo $a++ . PHP_EOL;
                             // echo $a . PHP_EOL;
                             // $b = 20;
                             //  echo --$b . PHP_EOL;
                             // echo $b-- . PHP_EOL;
                             // echo $b;







 

						 // Set the default timezone
						 // date_default_timezone_set('America/Chicago');

						 // // Get Day of Week as number
						 // // 1 (for Monday) through 7 (for Sunday)
						 // $day_of_week = date('N');

						 // switch($day_of_week) {
						 //     case 1:
						 //         // Output Monday
						 //     echo '$value is a day';

						 //     case 2:
						 //         // Output Tuesday
						 //     // etc through day 7
						 // }
						// for ($i = 1; $i <= 10; $i++) {
						//     echo $i . "\n";
						//     if ($i % 2 !== 0) {
						//         continue;
						//     }
						//     echo "^ that is an EVEN number.\n";
						// }

						// $numbers = array(1,2,3,4,5);
						// // Loop 1
						// foreach ($numbers as $key => $value) {
						//     echo "{$value}\n";
						//     // Loop 2
						//     for ($i == 1; $i <= 5; $i++) {
						//         if ($i == 1) {
						//             echo "{$i}\n";
						//             break 2;
						//         }
						//     }
						// }
						// echo "done!\n";












						// $value = True ;

						// switch (gettype($value)) {
						//     case 'integer':
						//         echo '$value is an integer' . PHP_EOL;
						//         break;
						//     case 'float':
						//         echo '$value is a float'  . PHP_EOL;
						//         break;
						//     case 'boolean':
						//         echo '$value is a boolean' . PHP_EOL;
						//         break;
						//     case 'array':
						//         echo '$value is an array' . PHP_EOL;
						//         break;
						//     case 'null':
						//         echo '$value is null' . PHP_EOL;
						//         break;
						//     case 'string':
						//         echo '$value is a string' . PHP_EOL;
						//         break;
						// }






						// $value = "Hello";

						// switch (gettype($value)) {
						//     case 'integer':
						//         echo '$value is an integer';
						//         break;
						//     case 'float':
						//         echo '$value is a float';
						//         break;
						//     case 'boolean':
						//         echo '$value is a boolean';
						//         break;
						//     case 'array':
						//         echo '$value is an array';
						//         break;
						//     case 'null':
						//         echo '$value is null';
						//         break;
						//     case 'string':
						//         echo '$value is a string' . PHP_EOL;
						//         break;
						// }












						// $name = 'John Doe';
						// $address = '123 Any Street';
						// echo "$name" . '  ' . "$address" . PHP_EOL;

						// $lastday = mktime(0, 0, 0, 3, 0, 2000);
						// echo date_default_timezone_get("Last day in Feb 2000 is: %d", $lastday);
						// $lastday = mktime(0, 0, 0, 4, -31, 2000);
						// echo (Last day in Feb 2000 is: %d", $lastday);















?>
