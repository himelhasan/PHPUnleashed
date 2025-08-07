<?php
$student = [
    'name'       => 'Himel Hasan',
    'age'        => 29,
    'id'         => 'S2025',
    'department' => 'Computer Science',
];

print_r( $student );
unset( $student["id"] );
print_r( $student );