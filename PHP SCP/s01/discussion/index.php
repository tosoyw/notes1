<!-- PHP code can be included to another file by using the require_once keyword. -->
<!-- We will use this method to separate the declaration of variables and functions from the HTML content. -->
<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>S01: PHP Basics and Selection Control Structures</title>
</head>
<body>
    <!-- <h1>Hello World!</h1> -->
    <h1>Echoing Values</h1>
    <p><?= 'Good day $name! Your given email is $email.'; ?></p>
    <p><?= "Good day $name! Your given email is $email."; ?></p>
    <p><?= 'Good day ' . $name . '! Your given email is ' . $email . '.'; ?></p>
    <p><?= PI; ?></p>
    <p><?= STUDENT ?></p>
    <p><?= $STUDENT; ?></p>

    <!-- Boolean -->
    <p><?= $hasTravelledAbroad; ?></p>

    <!-- Null -->
    <p><?= gettype($middleName); ?></p>

    <!-- To see data types, we can use var_dump() or gettype() -->
    <p><?= gettype($hasTravelledAbroad); ?></p>

    <!-- To see more details about the variable, use var_dump -->
    <p><?= var_dump($hasTravelledAbroad); ?></p>

    <!-- Array -->
    <p><?= $grades[2]; ?></p>
    <p><?= $grades[3]; ?></p>
    <p><?= implode(', ', $grades); ?></p>
    <p><?= var_dump($grades); ?></p>
    <p><?= print_r($grades); ?></p>

    <!-- Objects -->
    <p><?= $gradesObject->firstGrading; ?></p>
    <p><?= $personObj->address->country; ?></p>

    <h1>Operators</h1>
    <p>X: <?= $x; ?></p>
    <p>Y: <?= $y; ?></p>

    <p>Is Legal Age: <?= var_dump($isLegal); ?></p>
    <p>Is Legal Age: <?= var_dump($isRegistered); ?></p>

    <h1>Arithmetic Operators</h1>
    <p>Sum: <?= $x + $y; ?></p>
    <p>Difference: <?= $x - $y; ?></p>
    <p>Product: <?= $x * $y; ?></p>
    <p>Qoutient: <?= $x / $y; ?></p>

    <h2>Equality Operator</h2>
    <p>Loose Equality: <?= var_dump($x == '1342.14'); ?></p>
    <p>Loose Equality: <?= var_dump($x === '1342.14'); ?></p>

    <h3>Greater/Lesser Operator</h3>
    <p>Is Lesser: <?= var_dump($x < $y); ?></p>
    <p>Is Greater: <?= var_dump($x > $y); ?></p>

    <h2>Logical Operators</h2>
    <p>Are all requirements met?: <?= var_dump($isLegal && $isRegistered); ?></p>
    <p>Are some requirements met?: <?= var_dump($isLegal || $isRegistered); ?></p>
    <p>Are some requirements not met?: <?= var_dump(!$isLegal && !$isRegistered); ?></p>

    <h1>Function</h1>
    <p>Full Name: <?= getFullName('John', 'Danes', 'Smith'); ?></p>
    <p>Full Name: <?= getFullName('John', 'Jackson', 'Smith'); ?></p>

    <h1>Selection Control Structure</h1>
    <h3>If-ElseIf-Else Statement</h3>
    <p><?= determineTyphoonIntensity(67); ?></p>

    <h3>Ternary Operator</h3>
    <p>78: <?= var_dump(isUnderAge(78)); ?></p>
    <p>13: <?= var_dump(isUnderAge(13)); ?></p>

    <h3>Switch Statement</h3>
    <p><?= determineComputerUser(5); ?></p>

    <h2>Try-Catch-Finally</h2>
    <p><?= greetings("Hello World"); ?></p>
    <p><?= greetings(12); ?></p>

</body>
</html>