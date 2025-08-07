<?php

$numbers = [10, 25, 99, -4, 3.14, 1, 11, 2, 56, 3, 4, 22, 77, 5];
$emojis  = ["😀", "🚀", "🔥", "🍕", "🎉"];
$strings = ["apple", "banana", "keyboard", "PHP", "Bangladesh", "America"];
$fruits  = ['a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates'];

// 🔢 Standard Sorting/

sort( $numbers ); // sort ( )  => Ascending
print_r( $numbers );

rsort( $numbers ); // rsort() =>	Descending,
print_r( $numbers );

asort( $numbers ); // asort()	 =>	Ascending, keeps key-value
print_r( $numbers );

arsort( $numbers ); // arsort()	 =>	Descending, keeps key-value
print_r( $numbers );

// 🔠 Key-Based Sorting

ksort( $fruits ); // ksort() => key based ascending sort
print_r( $fruits );

krsort( $fruits ); // krsort() => key based descending sort
print_r( $fruits );

natsort( $strings ); // Natural order sort -- Uppercase then lowercase
print_r( $strings );

natcasesort( $strings ); // natcasesort() Case-insensitive	Natural order sort
print_r( $strings );

sort( $strings, SORT_STRING | SORT_FLAG_CASE ); //
print_r( $strings );

/* 
SORT_STRING	Compares items as strings (default is usually numeric if numbers exist)
SORT_FLAG_CASE	Makes string sort case-insensitive

*/