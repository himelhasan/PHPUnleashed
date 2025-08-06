<?php

// For loop: counts from 1 to 9 and prints each number

for ( $i = 1; $i < 10; $i++ ) {
    echo PHP_EOL;
    echo $i;
}
// Starts $i at 1.
// Runs while $i is less than 10
// After each loop, $i increases by 1 ($i++).
// Prints a newline, then prints $i.
// Result: prints numbers 1 to 9, each on a new line.

echo PHP_EOL . "while loop before i value is: " . $i . PHP_EOL;

// While loop: continues from where $i left off (which is 10), up to 14

while ( $i < 15 ) {
    $i++;
    echo PHP_EOL;
    echo $i;
}
/* 
$i is 10 (from previous loop).
While $i is less than 15, increment $i by 1.
Print the new $i with a newline.
Prints numbers 11 to 15 on new lines.

*/

echo PHP_EOL . "do while loop before i value is: " . $i . PHP_EOL;

// Do-while loop: runs at least once, continues until $i < 20

do {
    $i++;
    echo $i . PHP_EOL;

} while (
    $i < 20
);
/* 
$i is now 15. In the loop, 
first increments $i then prints it. 
Continues looping until $i reaches 20.
Prints numbers 16 to 20.
 */

// Multiple stepping in for loop
// $i counts down from 10, $j counts up from 1
for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo $i . ":" . $j . PHP_EOL;
}
/* 
Two counters: $i starts at 10 (counts down), $j starts at 1 (counts up).
Loop runs while $i is greater than 0.
After each iteration, $i decreases, $j increases.
Prints pairs like 10:1, 9:2, ..., 1:10.
*/

// Factorial using for loop

$f = 5;

for ( $i = $f, $sum = 1; $i > 1; $i-- ) {
    $sum = $sum * $i;
}

/* 
Calculate factorial of 5: 5 * 4 * 3 * 2 * 1.
$sum accumulates the product.
Loop starts at 5, multiplies $sum by $i each step, decreasing $i.
Result: 120 (5 factorial). 
*/

echo "factorial of {$f} is: {$sum}" . PHP_EOL;

echo PHP_EOL;

// Another factorial loop — also tracks number of steps (runtime)

$l       = 10;
$runtime = 0;
for ( $i = 1, $result = 1; $i <= $l; $i++ ) {
    $runtime++;
    $result *= $i;

    echo "factorial of {$l} added with {$i} is: {$result}" . PHP_EOL;
}
echo "factorial total runtime is: {$runtime} " . PHP_EOL;

/* 
Calculates factorial of 10 step-by-step.
$runtime counts the number of iterations.
Each step multiplies $result by current $i.
Prints the running factorial at each step.
At the end, prints total number of iterations (10).

*/

// Divisible by 7 check: prints numbers between 1-100 that are divisible by 7

for ( $i = 1; $i <= 100; $i++ ) {
    if ( $i % 7 == 0 ) {
        echo PHP_EOL;
        echo "{$i} is divisible by 7";
    }

}
/* 
Loops from 1 to 100
Checks if number is divisible by 7 ($i % 7 == 0)
Prints only those numbers that are divisible by 7.

*/

/* TASK: Skip numbers divisible by 3, stop when number reaches 42 Write a PHP script that loops through numbers 1 to 50, and: Skip (using continue) any number that is divisible by 3. Stop the loop entirely (using break) when the number reaches 42 Print all the other numbers that are not skipped. */

for ( $i = 0; $i < 50; $i++ ) {
    if ( $i == 42 ) {
        break; // stop loop at 42
    } else {
        if ( $i % 3 == 0 ) {
            continue; // skip numbers divisible by 3
        } else {
            echo PHP_EOL . $i;
        }
    }

}

/* 
Loops from 0 to 49.
Stops completely if $i is 42.
Skips printing if $i is divisible by 3.
Prints all other numbers.
*/

echo PHP_EOL;
echo "fibonacci";
echo PHP_EOL;
// fibonacci

// Generates Fibonacci numbers up to a maximum of 20 numbers.
// Skip (using continue) any Fibonacci number that is even — don't print it
// Stop the loop (using break) if any Fibonacci number is greater than 100.
// Print all remaining numbers.

for ( $i = 0, $veryOld = 0, $old = 1, $new = 1; $i < 20; $i++ ) {
    // Stop the loop if number is greater than 100

    $old     = $new;
    $new     = $old + $veryOld;
    $veryOld = $old;

    if ( $new > 100 ) {
        break;
    }
    // Skip even numbers (don't print them)

    if ( $new % 2 == 0 ) {
        continue;
    }
    echo $new . " ";

}