<?php
$numbers1 = [1, 4, 3, 66, 54, 7, 23, 1, 2];
$numbers2 = [88, 3, 21, 44, 3, 28, 1, 2, 7];

$fruits1 = ["a" => "apple", "b" => "banana", "c" => "lemon"];
$fruits2 = ["d" => "pineapple", "b" => "malta", "g" => "grapes", "c" => "lemon"];

// will check the value only and return a array of common elements
$common  = array_intersect( $numbers1, $numbers2 );
$commonF = array_intersect( $fruits1, $fruits2 );

print_r( $common );
print_r( $commonF );

// will check the value & the key and return a array of common elements
$commonKey  = array_intersect_assoc( $numbers1, $numbers2 );
$commonFKey = array_intersect_assoc( $fruits1, $fruits2 );

print_r( $commonKey );
print_r( $commonFKey );

//   will check the value and return a array of DIFFERENT elements

$diff       = array_diff( $numbers1, $numbers2 );
$diffFruits = array_diff( $fruits2, $fruits1 );

print_r( $diff );
print_r( $diffFruits );

//   will check the value & the key and return a array of DIFFERENT elements

$diffKey       = array_diff_assoc( $numbers1, $numbers2 );
$diffFruitsKey = array_diff_assoc( $fruits2, $fruits1 );

print_r( $diffKey );
print_r( $diffFruitsKey );