<?php 

//Then we will make a FOREACH loop that will determine how much it costs for each of them to eat on a buffet that has varied prices based on age. We will use the following pricing system: Under 5 is free, 5-12 years costs $4 and over 12 years is $6.



 
$t = 0; 

$age = array(4,8,33, 35, 13,); 

foreach ($age as $a) 

{ 
if ($a < 5) 

{$price = 0;} 

else 
{ 

if ($a < 12) 

{$price = 4;} 

else 

{$price = 6;} 

} 
$t = $t + $price; 

echo "$" . $price . "\n"; 

} 
echo "The total is: $" . $t; 
?>
























?>