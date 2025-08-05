<?php

$n = 5;

if ( $n % 2 != 0 ) {
    printf( "%s is an odd number \n", $n );
} else {
    echo "$n is an even number \n";
}

$atika  = 500;
$tasbir = 600;

if ( $atika > $tasbir ) {
    printf( "%s have more money than tasbir. She has %s taka", "Atika", $atika );
} elseif ( $atika == $tasbir ) {
    printf( "%s and %s have the equal money", "Atika", "Tasbir" );

} else {
    printf( "Tasbir have more money. He have %s Taka \n", $tasbir );
}

$age = 19;

if ( $age >= 13 && $age <= 18 ) {
    echo "Teenager";
} elseif ( $age <= 12 && $age >= 5 ) {
    echo "child";
} else {
    echo "Hoy gura naile bura \n";
}

// check leap year
// 1- divisible by 4?
// 2- divisible by 100 ?
// 3 - divisible by 400 ?

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

if ( $year % 4 == 0 && ( $year % 100 == 0 || $year % 400 == 0 ) ) {
    printf( '%s is a Leap year', $year );
} else {

    printf( $year . " is not a leap year" );
}

// ternary operator

echo "\n";

$tut = 101;
$n   = 101;

$isEvenNumber = $tut % 2 == 0 ? "{$tut} is a Evan number"
: "{$tut} is a ODD number";

echo $isEvenNumber;
echo "\n";

$numberInWord =
( 12 == $n ) ? "Twelve" : ( ( 10 == $n ) ? "Ten" : "A Number" );
echo $numberInWord;

//
echo "\n" . "switch case" . "\n";

$score = 95;

switch ( $score ) {
case $score >= 90 && $score <= 100:{
        echo "golden a+";
    }
    break;
case $score >= 80 && $score <= 89:{
        echo "a+";
    }
    break;
case $score >= 70 && $score <= 79:{
        echo "a";
    }
    break;
case $score >= 59 && $score <= 69:{
        echo "a-";
    }
    break;
default: echo "fail korso";
}

echo "\n";
$z = 90;

switch ( $z % 2 ) {
case 0:{
        switch ( $z ) {
        case $z > 0:{
                echo "{$z} is a positive even number";
            }
            break;
        default: {
                echo "{$z} is a negative even number";
            }
        }
    }
    break;
default: {
        switch ( $z ) {
        case $z > 0:{
                echo "{$z} is a positive odd number";
            }
            break;
        default: {
                echo "{$z} is a negative odd number";
            }
        }
    }
}

$n = 13;
echo PHP_EOL;
$result = $n % 2 == 0 ? "A" : ( ( $n == 11 ) ? "B" : "C" );
echo $result;