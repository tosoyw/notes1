<?php

// [ SECTION ] Comment

// - Single

/* 
    This is for Multiline comment
*/

// [ SECTION ] Variables 
    // Variables are used to contain data.
    // Variables are named location for the stored values.

$name = 'John Smith';
$email = 'johnsmith@gmail.com';

// [ SECTION ] Constants
// Constants are use to hold data that are meant to be read-only.
// Constant are defined using the define() function.
define('PI', 3.1416);
define('STUDENT', "Rupert");

$STUDENT = "John";

// [ SECTION ] Data Types
// Strings
$state = 'New York';
$country = 'United States of America';
$address = $state. ', ' .$country; // Concatenation via dot symbol.
$address = "$state, $country"; // Concatenation via double quotes.

// Integers
$age = 31;
$headcount = 14;

// Floats
$grade = 98.2;
$distanceInKilometer = 1342.12;

// Boolean
$hasTravelledAbroad = false;
$hasSymptoms = true;

// Null
$spouse = null;
$middleName = null;

// Arrays 
$grades = array(98.7, 92.1, 90.2, 94.6);

// Objects
$gradesObject = (object) [
    'firstGrading' => 98.7,
    'secondGradin' => 92.1,
    'thirdGrading' => 90.2,
    'fourthGrading' => 94.6
];

$personObj = (object) [
    'fullName' => 'John Smith',
    'isMarried' => false,
    'age' => 35,
    'address' => (object) [
        'state' => 'New York',
        'country' => 'USA'
    ]
];

// [ SECTION ] - Operators
// Assignment Operators
$x = 1342.14;
$y = 1268.24;

$isLegal = true;
$isRegistered = false;

// [ SECTION ] Functions
// Functions are used to make reusable codes.
function getFullName($firstName, $middleName, $lastName) {
    return "$lastName, $firstName, $middleName";
};

// [ SECTION ] Selection Control Structures
// Selection control structures are used to make code execution dynamic according to predefined conditions.
function determineTyphoonIntensity($windspeed) {
    if ($windspeed < 30) {
        return 'Not a typhoon yet';
    } elseif ($windspeed <= 61) {
        return 'Tropical depression detected';
    } elseif ($windspeed >= 62 && $windspeed <= 88) {
        return 'Tropical storm detected';
    } elseif ($windspeed >= 89 && $windspeed <= 117) {
        return 'Severe tropical storm detected';
    } else {
        return 'Typhoon detected';
    }
};

// Conditional (Ternary) Operator
function isUnderAge($age) {
    return $age < 18 ? true : false;
};

// Switch Statement
function determineComputerUser($username) {
    switch ($username) {
        case 1:
            return 'Rupert';
            break;
        case 2: 
            return 'Edwin';
            break;
        case 3:
            return 'Ellaine';
            break;
        case 4: 
            return 'Rafael';
            break;
        case 5: 
            return 'Ishan';
            break;
        default:
            return "$username is out of bounds";
            break;
    }
};

// Try-Catch-Finally
function greetings($string) {
    try {
        if(gettype($string) == 'string') {
            echo $string;
        } else {
            throw new Exception('Sorry, try again!');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "Nice Try";
    }
};

?>