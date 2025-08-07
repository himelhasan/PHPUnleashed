<?php

$name;

if ( isset( $name ) ) {
    echo "Name is set";
} else {
    echo "name is not set";
}

echo "\n";
if ( empty( $name ) ) {
    echo "Name is empty";
} else {
    echo "name is not empty";
}
echo "\n";

if ( isset( $name ) && ( is_numeric( $name ) || $name != "" ) ) {
    echo "Name is set and its not empty";
} else {
    echo "Name is either not set or it\'s  empty";
}