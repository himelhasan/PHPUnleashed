<?php

for ( $i = 1; $i < 10; $i++ ) {
    echo PHP_EOL;
    echo $i;
}
echo PHP_EOL . "while loop before i value is: " . $i . PHP_EOL;

while ( $i < 15 ) {
    $i++;
    echo PHP_EOL;
    echo $i;
}

echo PHP_EOL . "do while loop before i value is: " . $i . PHP_EOL;

do {
    $i++;
    echo $i . PHP_EOL;

} while (
    $i < 20
);

// multiple stepping
for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo $i . ":" . $j . PHP_EOL;
}

// factorial

$f = 5;

for ( $i = $f, $sum = 1; $i > 1; $i-- ) {
    $sum = $sum * $i;
}

echo "factorial of {$f} is: {$sum}" . PHP_EOL;

echo PHP_EOL;
$l       = 10;
$runtime = 0;
for ( $i = 1, $result = 1; $i <= $l; $i++ ) {
    $runtime++;
    $result *= $i;

    echo "factorial of {$l} added with {$i} is: {$result}" . PHP_EOL;
}
echo "factorial total runtime is: {$runtime} " . PHP_EOL;

for ( $i = 1; $i <= 100; $i++ ) {
    if ( $i % 7 == 0 ) {
        echo PHP_EOL;
        echo "{$i} is divisible by 7";
    }

}

// Write a PHP script that loops through numbers 1 to 50, and:
// Skip (using continue) any number that is divisible by 3.
// Stop the loop entirely (using break) when the number reaches 42
// Print all the other numbers that are not skipped.

for ( $i = 0; $i < 50; $i++ ) {
    if ( $i == 42 ) {
        break;
    } else {
        if ( $i % 3 == 0 ) {
            continue;
        } else {
            echo PHP_EOL . $i;
        }
    }

}
echo PHP_EOL;
echo "fibonacci";
echo PHP_EOL;
// fibonacci

// Generates Fibonacci numbers up to a maximum of 20 numbers.
// Skip (using continue) any Fibonacci number that is even — don't print it
// Stop the loop (using break) if any Fibonacci number is greater than 100.
// Print all remaining numbers.

for ( $i = 0, $x = 0, $y = 1, $z = 1; $i < 20; $i++ ) {

    echo $z . " ";

    $y = $z;
    $z = $y + $x;
    $x = $y;

}