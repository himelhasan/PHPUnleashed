<?php

$color = [122, 233, 65];
$red   = $color[0];
$green = $color[1];
$blue  = $color[2];

list( $red, $green, $blue ) = $color;

echo $green;

$student             = ['Fname', 'Lname', 'Email', 'MobileNumber'];
list( $f, $l, $e, $m ) = ['Fname', 'Lname', 'Email', 'MobileNumber'];
echo $f;

echo "\n";
$random = mt_rand( 0, 55 );
echo $random;