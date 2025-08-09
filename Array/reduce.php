<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sum( $curry, $item ) {
    return $curry + $item;
}

$sum = array_reduce( $numbers, "sum", 0 );
echo $sum;

echo "\n";

/*
array_reduce works: It takes three parameters: array — the input array to process  
callback — a function that takes two arguments:
the accumulator (carry) value the current array item
initial (optional) — the initial value for the accumulator (carry)


array_reduce starts with initial value 0
For each element, it adds to the accumulator
Result is sum of all numbers in the array
*/

function evanChecker( $curry, $item ) {
    return $item % 2 == 0 ? $curry + $item : $curry;
}

$sumOfEven = array_reduce( $numbers, "evanChecker" );
echo $sumOfEven;
echo "\n";
echo count( $numbers );