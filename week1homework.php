<?php 

// Create an array of people. Each person should have a 'name', 'phone_number', and 'address'. 
// The 'name' should be an associative array with keys 'first' and 'last'. 
// iMake sure there are at least 3 people in the array.

// Loop through the array and produces the following output:
// 1. First Last
//   Phone: 123-123-1234
//   Address: 123 Somewhere Dr. SA, TX 12345

// 2. First Last
//   Phone: 123-123-1234
//    Address: 123 Somewhere Dr. SA, TX 12345
// -------------------------------------------

// $people = array(
// 	array(
// 		'name' => array('first' => 'Timothy', 'last' => 'Leary'),
// 		'phone' => '(000) LSD-0000',
// 		'address' => 'Lucy In The Sky Diamonds, Hollywood CA 90210'),
// 	array(
// 		'name' => array('first' => 'Angela', 'last' => 'Davis'),
// 		'phone' => '(000) 8675-309',
// 		'address' => '13 BlackPanther Drive, Hollywood CA 66666'),
// 	array(
// 		'name' => array('first' => 'Patricia', 'last' => 'Hurst'),
// 		'phone' => '(897) 8675-309',
// 		'address' => '21 Bankrobbery Lane, Hollywood CA 00000'),
// 	array(
// 		'name' => array('first' => 'Rick', 'last' => 'Springfield'),
// 		'phone' => '(897) 8675-309',
// 		'address' => '8675 Jenny Jenny Lane, Springfield Misery  75309'),
// 	); // end main array

// foreach ($people as $persons => $Information) {

// 	echo ($persons + 1) . ". ";

// 	foreach ($Information as $key => $value) {

// 		// If $value is an array, then print the value of "first"      "last"
// 		if (is_array($value)) {
// 			echo "{$value['last']} , {$value['first']}\n";	
// 		}


// 		else {
// 			// Echo Out Attributes of Person
// 			echo "   " . ucfirst($key) . ": $value\n";
// 		}

// 	} // End interior foreach loop




//  } // End exterior foreach loop


	# code...

			//


$quiz =[					// questions//

	 '1' => ['questions' => 'What color is the blue sky?',
	 		'answers' => [
	 		'A' => 'blue',
	 		'B' => 'green',
	 		'C' => 'yellow',
	 		'D' => 'black'

	 		],						// answers//
	 			'correct_answer' => 'A'	
	  ],
	 '2' => ['questions' => 'What color is George Washingtons White Horse?',
	 		'answers' => [
	 		'A' => 'blue',
	 		'B' => 'white',
	 		'C' => 'yellow',
	 		'D' => 'black'

	 		],
	 			'correct_answer' => 'B'
	  ],
	 '3' => ['questions' => 'What time is it?',
	 		'answers' => [
	 		'A' => 'Time to go Home',
	 		'B' => 'Time to go to class',
	 		'C' => 'Time is of the essence',
	 		'D' => 'Miller Time'

	 		],
	 			'correct_answer' => 'D'
	  ],
     '4' => ['questions' => 'I am what I am?',
	 		'answers' => [
	 		'A' => 'An Ostrich',
	 		'B' => 'A Goat',
	 		'C' => 'A Human',
	 		'D' => 'Uranus'

	        ],

	 			'correct_answer' => 'C'
	        ]
      ];						// 
	 		foreach ($quiz as $questionNum  => $value) {
	 			echo "$questionNum.  {$value['questions']}\n";

	 	 		$correct_answer = "{$value['correct_answer']}";

	 			foreach ($value['answers'] as $answerChoice => $answerContent){

	 				if ($answerChoice == $correct_answer) {
	 					echo "\t*$answerChoice) $answerContent\n";   
			}

					else {

						echo "\t $answerChoice) $answerContent\n";
			}


	 					//end of program//
	 		}
	 		 
	 				
	 	 	}


	 			
	 		


	 
?>
