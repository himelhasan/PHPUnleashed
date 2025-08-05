<?php

/*
Integer Int
Double / Float
Boolean
Null
String
Array
Object
Resource

 */

$name    = "bangladesh";
$age     = 123;
$friends = [];
$result  = true;
var_dump( $result );

$city  = "Dhaka";
$uname = strtoupper( $city );
echo 'we\'re living on ' . $city . "\n" . "<br/>";
printf( "\nhey, I am from %s,", strtoupper( $city ) );

echo "My
name
is
{$city}
Hasan";

var_dump( $name );
var_dump( $age );
var_dump( $friends );