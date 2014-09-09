<?php 

$trees = array(
    'Scale' => array(
        'genus' => 'Lepidodendron',
        'species' => 'freakius',
        'extinct' => true,
    ),
    'Lambert Pine' => array(
        'genus' => 'Pinus',
        'species' => 'lambertiana',
        'extinct' => false
    ),
    'English Oak' => array(
        'genus' => 'Quercus',
        'species' => 'robur',
        'extinct' => false
    ),
    'Coast Redwood' => array(
        'genus' => 'Sequoia',
        'species' => 'sempervirens',
        'extinct' => false
    )
);


// echo $multi_array['Scale'][] . PHP_EOL;
// echo $multi_array[''][''] . PHP_EOL;
// echo $multi_array[''][''][] . PHP_EOL;


// For each tree, output the following:

// --------------
// Scale Tree (Lepidodendron freakius)
// Extinct? Yes<
// ---------------

foreach ($trees as $treeName => $value) {

    

    echo $treeName . ' ' .  $value[genus] . ' ' . $value[species] . PHP_EOL;
    // echo $treeName  . ' ' . $value[extinct]  . PHP_EOL;

    if( $value[extinct] == true){
         echo "Lepidodendron freakius Tree. Extinct YES" . PHP_EOL;
        
// Extinct? Yes<
    }
    
    else{
        echo 'Not extinct' . PHP_EOL;
    }
}



 ?>