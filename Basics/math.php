<?php

$number = 12;
$number += 1;
$add      = 12 + $number;
$minus    = $add - 4;
$multiply = $number * 5;

printf( "The boy have %s Lakh taka in bank. He get a project and now his balance is %s Lakh taka. He spent some mone computer parts and his new balance is %s . He won a reward and now his balance is %s ", $number, $add, $minus, $multiply );
echo "\n";
$x = $y = 7;
echo $x, "\n", $y;

$a = 112233.456789;
$b = 012.5668;

printf( "the number is %b and %d\n", $a, $b );

$fname = "tanvir";
$lname = "hasan";

printf( 'his full name is %s, %s and
he holds the number card %05.2f', $fname, $lname, $a );

$output = sprintf( "\n" . ' the number is %s but the modified number is %05.2f and the serial number is %012d', $a, $a, $a );

echo $output;