<?php
$fruits = ["brinjal", "brocolli", "carrot", "capsicam"];

$someFruits = array_slice( $fruits, 1, 2 );
$fewFruits  = array_slice( $fruits, 1, -2 );
$manyFruits = array_slice( $fruits, 2, 2, true );

print_r( $someFruits );
print_r( $fewFruits );
print_r( $manyFruits );

//  splice

echo "ARRAY SPLICE \n";
$newFruits   = ["apple", "orange", "watermelon"];
$testedFoods = array_splice( $fruits, 1, 2, $newFruits );
print_r( $testedFoods );
print_r( $fruits );