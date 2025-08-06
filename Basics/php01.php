<?php

// 🟢 Variables store data that can be changed later

$name         = "bangladesh";  // string
$age          = 123;           // integer
$myName       = "Himel Hasan"; // string
$myAge        = 23;            // integer
$isMarried    = true;          // boolean (true/false)
$noOfChildren = 1;             // integer

// 🟢 define() creates a constant — a named value that cannot be changed after it's set
define( "wife", "Anny" );

// You can reassign values to variables
$age = 30;

// A string value stored in a variable
$constant = "constant";

// 🟢 echo outputs text to the browser or terminal
echo $name;

// 🟢 \n adds a line break (newline) when output is displayed in terminal or text (not in HTML)
echo "\n";

// You can use variables inside double-quoted strings
echo " Hello $name";
echo "new age is $age \n";
echo "new name is $myName \n";

// 🟢 Concatenation (joining strings) is done with the dot (.) operator
echo "new age is $age  and my wife's name is " . wife . "\n";

// 🟢 constant() function is used to access a constant's value by name (as a string)
echo constant( "wife" );

// This is called a variable function — PHP allows it when the variable holds the name of a valid function.
// And inside double quotes, {$constant("wife")} is allowed — it will run constant("wife"), and insert the return value into the string.

echo "\n I love {$constant( "wife" )} \n";

// 🟢 Empty array declaration (will be used to store list of items later)
$friends = [];
