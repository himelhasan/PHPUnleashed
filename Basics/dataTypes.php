<?php

// Data types in PHP:
// Integer, Float (Double), Boolean, Null, String, Array, Object, Resource

// Assigning a string to a variable
$name = "bangladesh";

// Assigning an integer
$age = 123;

// Creating an empty array
$friends = [];

// Assigning a boolean value
$result = true;

// var_dump shows data type and value — useful for debugging
var_dump( $result );

// Assigning a string
$city = "Dhaka";

// strtoupper() converts string to uppercase
$uname = strtoupper( $city );

// Concatenating string using '.' and escaping single quote with backslash
echo 'we\'re living on ' . $city . "\n" . "<br/>";

// printf() formats a string — %s is a placeholder for string
printf( "\nhey, I am from %s,", strtoupper( $city ) );

// Curly braces inside double-quoted string allow variable parsing
echo "My
name
is
{$city}
Hasan";

// Output variable info: type and value
var_dump( $name );
var_dump( $age );
var_dump( $friends );
