<?php
$student = [
    'name'       => 'Himel Hasan',
    'age'        => 29,
    'id'         => 'S2025',
    'department' => 'Computer Science',
];

// deep copy; // copy by value
$newStudent         = $student;
$newStudent["name"] = "Tanjim Sakib";

print_r( $student );
print_r( $newStudent );

// shallow copy; // copy by reference
$newStudent2         = &$student;
$newStudent2["name"] = "Tanvir Hasan";
print_r( $student );
print_r( $newStudent2 );
