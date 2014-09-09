<?php 

// Create a function the returns the area of a circle: area_of_circle().
// Now create a function that returns the area of a donut; use your previous function to figure this out.
// The radius of the donut is 15 and the radius of its hole is 5.



$diameter = 4.0;
$pi = 3.14;
$title="Circle";

echo  $area .   PHP_EOL;

function circleArea($diameter, $pi) 
{
    $area = $diameter * $pi; 
    return $area; 
} 

echo circleArea ($diameter,$pi); 
echo "$area";




  














 ?>