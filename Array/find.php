<?php
$numbers = ["10", 25, 99, -4, 3.14, 1, 11, 2, 56, 3, 4, 22, 77, 5];
$strings = ["apple", "banana", "keyboard", "PHP", "Bangladesh", "America"];
$fruits  = ['a' => 'apple', 'b'  => 'banana',
    'f'             => 'orange', 'p' => 'plum', 'd' => 'dates'];

//  loose search. it wont check the type
$search = in_array( 10, $numbers ) ? "found" : "missing";
echo $search;

echo "\n";

//  strict search. it will check the type
$strictSearch = in_array( 10, $numbers, true ) ? "found" : "missing";
echo $strictSearch;
echo "\n";

// search the index // it will return the index of the first item that
// it finds.
$offset = array_search( "Bangladesh", $strings );
echo $offset;

// key_exits search if the key exits

$isKeyExist = key_exists( "p", $fruits ) ? "found" : "missing";
echo "\n";
echo $isKeyExist;