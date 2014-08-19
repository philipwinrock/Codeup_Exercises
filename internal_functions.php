<?php

// $nothing = NULL;
// $something = '';
// $array = array(1,2,3);
// $serializearray
// if (isset($data)); {
// if ($data != '') {
// if (!empty($data)) {

// create function that checks if a variable is set or empty , and display.
 function check_variable($variable)
 {
 	if (isset($variable)) 			{
 		return "\something is set" . PHP_EOL;

 		}elseif (empty($variable)) 	{

		return "\$nothing is empty" . PHP_EOL; 			# code...
 		}
 		# code...
 }
 
 		echo check_variable($nothing);
 		echo check_variable($something);

 		$serialize_array = serialize($array);
 		var_dump(serialize_array);
 		var_dump($array);

		$unserialize_array = unserialize($array);
		var_dump(unserialize_array);
		var_dump($array);



















?>