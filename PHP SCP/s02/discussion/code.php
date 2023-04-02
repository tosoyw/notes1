<?php

// [ Section ] Repetition Control Structure
// RCS are used to execute code multiple times.

// While Loops
// A while loop takes a single condition. If the condition evaluates true, the code inside the block will run.
function whileLoop() {
    $count = 5;
    while($count != 0) {
        echo "$count <br>";
        $count--;
    }
};

// Do-While Loops
// A do-while loop works a lot like while loop. But unlike while loops, do-while loops guarantee that the code will be executed at least once. 
function doWhileLoop() {
    $count = 20;
    do {
        echo "$count <br>";
        $count--;
    } while($count > 0);
};

// For Loops
// A for-loop is more flexible than the while loop and do-while loop.
function forLoop() {
    for ($count = 0; $count <= 20; $count++) {
        echo "$count <br>";
    }
};

// Continue/Break Statements
function modifiedForLoop() {
    for ($count = 0; $count <= 20; $count++) {
        if ($count % 2 === 0) {
            continue;
        }
        echo "$count <br>";
        if ($count > 10) {
            break;
        }
    }
};

// [ Section ] Array & Array Manipulation
// An array is kind of variable that can hold more than one value.
// Arrays are declared using the square bracket '[]' or the array() function
$studentNumber = array('2020-1923', '2020-1924', '2020-1925'); // before the PHP v5.4
$studentNumber = ['2020-1923', '2020-1924', '2020-1925']; // introduced in the PHP v5.4

// Simple Arrays
$grades = [98.5, 94.3, 89.2, 90.1];
$computerBrands = ['Acer', 'Asus', 'Lenovo', 'Neo', 'Redfox', 'Gateway', 'Toshiba', 'Fujitsu'];
$task = [
    'drink html',
    'eat javascript',
    'inhale css',
    'bake sass'
];

// Associative Array
$gradePeriods = [
    'firstGrading' => 98.5,
    'secondGrading' => 94.3,
    'thirdGrading' => 89.2,
    'fourthGrading' => 90.1
];

// Two-Dimensional Array
$heroes = [
    ['Lalaking Bakal', 'Thor', 'Hulk'],
    ['Wolverine', 'Cyclops', 'Jean Malamaya'],
    ['Lalaking Paniki', 'Lalaking Lakas', 'Babaeng Astig']
];

// Two-Dimensional Associative Array
$ironManPowers = [
    'regular' => ['Repulsor Blast', 'Rocket Punch'],
    'signature' => ['Unibeam']
];

// [ SECTION ] Array Functions/Methods
// Array Sorting
$sortedBrands = $computerBrands;
$reverseSortedBrand = $computerBrands;

// Sorting Arrays
sort($sortedBrands);
rsort($reverseSortedBrand);

// Other Array Functions
function searchBrand($brands, $brand) {
    return (in_array($brand, $brands)) ? "$brand is in the array" : "$brand is not in the array.";
}

// Reversing the arrangement of the elements but does not change the array itself.
$reverseGradePeriods = array_reverse($gradePeriods);

?>