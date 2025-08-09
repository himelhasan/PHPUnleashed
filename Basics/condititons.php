<?php

$n = 5;

// Check if number is odd or even using modulus operator (%)
if ( $n % 2 != 0 ) {
    printf( "%s is an odd number \n", $n );
} else {
    echo "$n is an even number \n";
}

$atika  = 500;
$tasbir = 600;

// Compare two values using if-elseif-else
if ( $atika > $tasbir ) {
    printf( "%s have more money than tasbir. She has %s taka", "Atika", $atika );
} elseif ( $atika == $tasbir ) {
    printf( "%s and %s have the equal money", "Atika", "Tasbir" );
} else {
    printf( "Tasbir have more money. He have %s Taka \n", $tasbir );
}

$age = 19;

// Multiple conditions using logical AND (&&)
if ( $age >= 13 && $age <= 18 ) {echo "Teenager";} elseif
( $age <= 12 && $age >= 5 ) {
    echo "child";
} else {
    echo "Hoy gura naile bura \n";
    // informal phrase — probably means "neither young nor old"
}

// Leap year check logic:
// Leap year if divisible by 4, except divisible by 100 unless divisible by 400

$year = 2027;

if ( $year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ) {
    printf( '%s is a Leap year', $year );
} elseif ( $year % 4 == 0 && $year % 100 == 0 ) {
    printf( '%s is a Leap year', $year );
} elseif ( $year % 4 == 0 ) {
    printf( '%s is a Leap year', $year );
} else {
    printf( $year . " is not a leap year" );
}

// Better logic is below after this block

if ( $year % 4 == 0 && ( $year % 100 != 0 || $year % 400 == 0 ) ) {
    printf( '%s is a Leap year', $year );
} else {
    printf( $year . " is not a leap year" );
}

// Ternary operator for simple conditional assignment
echo "\n";

$tut = 101;
$n   = 101;

// Checks if number is even or odd using ternary operator
$isEvenNumber = $tut % 2 == 0 ? "{$tut} is a Even number" : "{$tut} is an ODD number";
echo $isEvenNumber;
echo "\n";

// Nested ternary operator for matching numbers to words
$numberInWord = ( 12 == $n ) ? "Twelve" : ( ( 10 == $n ) ? "Ten" : "A Number" );
echo $numberInWord;

// Switch statement — usually used with fixed values, not ranges, but here you use conditions inside cases (not recommended)
echo "\n" . "switch case" . "\n";

$score = 95;

switch ( true ) { // switch(true) lets you use conditions in case statements
case ( $score >= 90 && $score <= 100 ):
    echo "golden a+";
    break;
case ( $score >= 80 && $score <= 89 ):
    echo "a+";
    break;
case ( $score >= 70 && $score <= 79 ):
    echo "a";
    break;
case ( $score >= 59 && $score <= 69 ):
    echo "a-";
    break;
default:
    echo "fail korso"; // means "you failed"
}

// Nested switch example to detect even/odd and positive/negative
echo "\n";
$z = 90;

switch ( $z % 2 ) {
case 0: // even number
    switch ( true ) {
    case ( $z > 0 ):
        echo "{$z} is a positive even number";
        break;
    default:
        echo "{$z} is a negative even number";
    }
    break;
default: // odd number
    switch ( true ) {
    case ( $z > 0 ):
        echo "{$z} is a positive odd number";
        break;
    default:
        echo "{$z} is a negative odd number";
    }
}

// Nested ternary operator again — compact but can be confusing
$n = 13;
echo PHP_EOL;
$result = $n % 2 == 0 ? "A" : ( ( $n == 11 ) ? "B" : "C" );
echo $result;

$default_lat = 23.9;
$default_lon = 90.8;
$user_lat    = 12.3;

echo $lat;

// if else
if ( isset( $user_lat ) ) {
    $lat = $user_lat;
} else {
    $lat = $default_lat;
}

//  ternary operator
$lat = isset( $user_lat ) ? $user_lat : $default_lat;

// null coalesce operator

$lat = $user_lat ?? $default_lat;
