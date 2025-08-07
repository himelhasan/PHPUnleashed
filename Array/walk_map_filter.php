<?php
$numbers1 = [1, 4, 3, 66, 54, 7, 23, 1, 88, 3, 21, 44, 3, 28, 1, 2, 7];

function square( $n ) {
    printf( "Square of %s is: %s \n ", $n, $n * $n );
}

function cube( $n ) {
    return $n * $n * $n;
}

array_walk( $numbers1, "square" );

//  array_map
$numbersCube = array_map( "cube", $numbers1 );
print_r( $numbersCube );

// array_filter

function even( $n ) {
    return $n % 2 == 0 ? true : false;
}

$isEvenNumber = array_filter( $numbers1, "even" );
print_r( $isEvenNumber );

function filterByA( $word ) {
    return $word[0] == "s";
}
$persons     = ['sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma'];
$sWordsArray = array_filter( $persons, "filterByA" );

print_r( $sWordsArray );