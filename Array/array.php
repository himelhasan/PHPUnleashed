<?php

// mutable
$students = [
    "rahim",
    123,
    "karim",
];

$students[1] = "Shafik";

array_shift( $students ); // remove first item
array_pop( $students );   // remove last item

array_unshift( $students, "Atika" ); // add at first index
array_push( $students, "Tasbir" );   // add at last index

echo count( $students ) . "\n";

$n = count( $students ); // length of array
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}

$foods = ['vegetables' => ["brinjal", "brocolli", "carrot", "capsicam"],
    'fruits'               => 'orange, banana, apple',
    'drinks'               => 'water, milk'];

// foreach ( $foods as $key => $value ) {
//     echo $key . "=" . $value . "\n";
// }

$keys   = array_keys( $foods );
$values = array_values( $foods );

$foods["fruits"] = $foods["fruits"] . ", Dragon fruit";
$foods["drinks"] .= ", Pomegranate ";

array_push( $foods["vegetables"], "papaya" );
var_dump( $foods["vegetables"][0] );

print_r( $foods["vegetables"] );

echo implode( ", ", $foods["vegetables"] );
/*
Convert array → string
implode(separator, array
Joins array elements into a single string using a separator.
Use implode() to convert array to string


 ", " this is delimeter */

$foods["drinks"] = explode( ", ", $foods["drinks"] );

/* 
explode()
Convert string → array
explode(separator, string)
Splits a string into an array using a separator.
*/

$foods["vegetables"] = join( ", ", $foods["vegetables"] );

echo $foods;

/* ✅ join()
Convert array → string
Alias of implode()
join() is exactly the same as implode() — just another name.
*/

//Multidimensional Array
$tvSeries = [
    'Drama'  => [
        [
            'title'    => 'Breaking Bad',
            'year'     => 2008,
            'platform' => 'Netflix',
        ],
        [
            'title'    => 'The Crown',
            'year'     => 2016,
            'platform' => 'Netflix',
        ],
    ],
    'Comedy' => [
        [
            'title'    => 'Brooklyn Nine-Nine',
            'year'     => 2013,
            'platform' => 'Peacock',
        ],
        [
            'title'    => 'The Office',
            'year'     => 2005,
            'platform' => 'Peacock',
        ],
    ],
    'Sci-Fi' => [
        [
            'title'    => 'Stranger Things',
            'year'     => 2016,
            'platform' => 'Netflix',
        ],
        [
            'title'    => 'The Mandalorian',
            'year'     => 2019,
            'platform' => 'Disney+',
        ],
    ],
];

echo "Platform is: " . $tvSeries["Sci-Fi"][1]["platform"];
