<?php
// encapsulation

function isEven( $n ) { // parameter
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;

}

function factorial( int $n ) { // from php 7
                                 // for php 5
    if ( gettype( $n ) != "integer" ) {
        return "invalid";
    }

    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}

function serve( $foodType = "Coffee", $numberOfItems = "1 cup" ) {
    echo "{$numberOfItems} of {$foodType} has been served";
}

function sum( int $x, int $y, int $z ): int {
    return $x + $y + $z;
}

function unlimitedCount( int ...$numbers ): int {
    $result = 0;
    for ( $i = 0; $i < count( $numbers ); $i++ ) {
        $result += $numbers[$i];
    }
    return $result;
}

// recursive function

function printNumber( $start, $end, $stepping ) {

    if ( $start > $end ) {
        echo "kella foteh \n";
        return;
    }
    echo $start . "\n";
    $start += $stepping;
    printNumber( $start, $end, $stepping );

}
printNumber( 1, 9, 1 );

function fibonacci( $param ) {
    static $start;
    static $old = 0;
    static $new = 1;
    $start      = $start ?? 1;

    if ( $start > $param ) {
        return;
    }

    echo $old . " ";
    $start++;

    $_temp = $old + $new;
    $old   = $new;
    $new   = $_temp;

    fibonacci( $param );

}

fibonacci( 15 );

function recursiveFactorial( int $param ): int {

    if ( $param <= 1 ) {
        return 1;
    }

    return $param * recursiveFactorial( $param - 1 );
}
echo "\n the recursive factorial result is :" . recursiveFactorial( 5 );