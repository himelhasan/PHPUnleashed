<?php

//variable
$name         = "bangladesh";
$age          = 123;
$myName       = "Himel Hasan";
$myAge        = 23;
$isMarried    = true;
$noOfChildren = 1;
define( "wife", "Anny" );
$age      = 30;
$constant = "constant";

echo $name;
echo "\n";
echo " Hello $name";

echo "new age is $age \n";
echo "new name is $myName \n";

echo "new age is $age  and my wife's name is" . wife;
echo constant( "wife" );
echo "\n I love {$constant( "wife" )} \n";

$friends = [];
