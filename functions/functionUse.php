<?php

include_once "functions.php";

$x = 5;

switch ( isEven( $x ) ) { // argument
case ( true ): {
        echo "{$x} is an even number" . "\n";
        break;
    }
default: {
        echo "{$x} is an odd number" . "\n";
    }
}

echo "factorial of {$x} is:" . factorial( $x ) . "\n";

$ft  = "salad";
$noi = "4 plates";

serve( $ft, $noi );

echo "\n total is: " . unlimitedCount( 1, 2, 3, 4, 5, 6 );