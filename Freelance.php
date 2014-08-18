<?php





$students = array(
    array('name' => 'Virginia Potts age is 29'),
    array('name' => 'Elon Musk his age is 42'),
    array('name' => 'Rasmus Lerdorf his age is 45'),
    array('name' => 'Marissa Mayer her age is 38') 
);

	foreach ($students as $student) {

    foreach ($student as $key => $value) {

        echo "Student's $key is $value\n";
    }

	}



    

 










?>