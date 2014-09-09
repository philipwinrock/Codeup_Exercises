<?php 

//http://app.codeup.com/php_ii/control-structures-ii/foreach-with-keys.html

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

// For each tree, output the following:

// ---------------
// Scale Tree (Lepidodendron freakius)
// Extinct? Yes
// ---------------

foreach ($trees as $treeName => $properties) {

	echo '---------------' . PHP_EOL;

	echo "$treeName Tree ({$properties['genus']} {$properties['species']})" . PHP_EOL;
	//echo $treeName . ' Tree' . ' (' . $properties['genus'] . ' ' . $properties['species'] . ') ' . PHP_EOL;

		if ($properties['extinct'] == TRUE) {
			echo 'Extinct?' . ' Yes' . PHP_EOL;
		} 

		else {
			echo 'Extinct?' . ' No' . PHP_EOL;
		}

	echo '---------------' . PHP_EOL;
}

?>