<?php









	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Michael Dell'];

	$compare = ['Tina', 'Deano', 'Miko', 'Amy', 'Michell Dell'];

	function search_array($keyword,$array){



	$match=array_search($keyword , $array);

	if($match === false) {

		return FALSE;
}		
		return TRUE;



}

function compare_arrays($array1 ,$array2){

			$numofmatches = 0;

		foreach ($array2 as $keyword) {
		 $foundamatch = search_array ($keyword , $array1);
		 if ($foundamatch) {
		 	$numofmatches++;
		 	# code...
		 }
			}

			return $numofmatches;
		}



	$result = search_array('Tina' , $names);



    echo $result . PHP_EOL;















 






$numofmatches = compare_arrays($names , $compare);
echo $numofmatches . "matches" . PHP_EOL;












?>