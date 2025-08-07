<?php

$students = [
    [
        'name'     => 'Alice Rahman',
        'age'      => 20,
        'id'       => 'S1001',
        'subjects' => [
            'Math'    => 88,
            'English' => 92,
            'Physics' => 75,
        ],
    ],
    [
        'name'     => 'Bilal Hossain',
        'age'      => 22,
        'id'       => 'S1002',
        'subjects' => [
            'Math'      => 78,
            'English'   => 85,
            'Chemistry' => 90,
        ],
    ],
    [
        'name'     => 'Chowdhury Nila',
        'age'      => 19,
        'id'       => 'S1003',
        'subjects' => [
            'Biology' => 82,
            'English' => 88,
            'Math'    => 91,
        ],
    ],
];

$studentsSerializedData = serialize( $students );
echo $studentsSerializedData;
echo "\n";

$studentsUnserializeData = unserialize( $studentsSerializedData );
print_r( $studentsUnserializeData );

$jsonStudent = json_encode( $students );
echo $jsonStudent;

$jsonToStudentsDataRevert = json_decode( $jsonStudent );
print_r( $jsonToStudentsDataRevert );

// json_decode returns object

$jsonStudentDataArray = json_decode( $jsonStudent, true );
// json_decode true returns associative array