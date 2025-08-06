<?php

// Updating a number using the += operator (same as $number = $number + 1)
$number = 12;
$number += 1; // Now $number is 13

// Basic arithmetic operations

$add      = 12 + $number; // 12 + 13 = 25
$minus    = $add - 4;     // 25 - 4 = 21
$multiply = $number * 5;  // 13 * 5 = 65

// 🟢 printf() formats and prints a string with placeholders like %s (string), %d (int), %f (float)
printf(
    "The boy have %s Lakh taka in bank. He get a project and now his balance is %s Lakh taka. He spent some mone computer parts and his new balance is %s . He won a reward and now his balance is %s ",
    $number,
    $add,
    $minus,
    $multiply
);

echo "\n";

// 🟢 Chained assignment — assigns 7 to both $x and $y
$x = $y = 7;
echo $x, "\n", $y;

// 🟢 Float values
$a = 112233.456789;

// ⚠️ Octal error — numbers starting with 0 are
// treated as octal (base 8) in PHP. This is invalid for floats.

$b = 012.5668;
// PHP will parse 012 as octal (decimal 10), but the
// .5668 part is ignored → result: 12.5668
// ✅ Use a valid decimal format like: $b = 12.5668;

printf( "the number is %b and %d\n", $a, $b );
// %b = binary format, %d = integer. So this line prints:
// Binary representation of $a and integer part of $b

// 🟢 Full name formatting with float value
$fname = "tanvir";
$lname = "hasan";

printf(
    'his full name is %s, %s and
he holds the number card %05.2f',
    $fname,
    $lname,
    $a
);
// %05.2f → format float with 2 decimals, padded to 5 total
//  width with leading zeros e.g., 112233.456789 → 112233.46
//  (will NOT be padded since it's more than 5 digits)

// 🟢 sprintf() is like printf(), but instead of printing,
//  it returns the formatted string

$output = sprintf(
    "\n the number is %s but the modified number is %05.2f and the serial number is %012d",
    $a,
    $a,
    $a
);
// %012d → pad integer with leading 0s to make it 12 digits long
// e.g., 112233 → 000000112233

// Print the final formatted output
echo $output;
