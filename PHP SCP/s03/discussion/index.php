<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S03: Classes and Objects</title>
</head>

<body>
    <h1>Objects from Variables</h1>
    <p><?= $buildingObj->name; ?></p>

    <h1>Objects from Classes</h1>
    <h4>Building</h4>
    <p><?php var_dump($building); ?></p>
    <p><?php echo $building->printName(); ?></p>

    <h1>DOG</h1>
    <p><?php $dog->printName(); ?></p>

    <h1>CAT</h1>
    <p><?php $cat->printName(); ?></p>

    <h1>Inheritance (Condominium Object)</h1>
    <p><?php echo $condiminium->name; ?></p>
    <p><?php echo $condiminium->floors; ?></p>

    <h1>Polymorphism (Changing of printName Behavoiur)</h1>
    <p><?php echo $condiminium->printName(); ?></p>
</body>

</html>