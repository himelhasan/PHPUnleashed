<?php

$color = [122, 233, 65];
$red   = $color[0];
$green = $color[1];
$blue  = $color[2];

list( $red, $green, $blue ) = $color;
echo $green;
echo "\n";

$student             = ['Fname', 'Lname', 'Email', 'MobileNumber'];
list( $f, $l, $e, $m ) = ['Fname', 'Lname', 'Email', 'MobileNumber'];
echo $f;
echo "\n";

$random = mt_rand( 0, 55 );
echo "\nRANDOM \n";
print_r( $random );
echo "\n";

$numberRange = range( 201, 222 );
print_r( $numberRange );

shuffle( $numberRange );
echo "\n   shuffle ki hoise?";
print_r( $numberRange );

$fruits = ['a' => 'apple', 'b'  => 'banana',
    'f'            => 'orange', 'p' => 'plum', 'd' => 'dates'];

shuffle( $fruits ); // it shuffles but it loose the key
                  // print_r( $fruits );
