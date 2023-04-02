<?php require_once "./code.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S04: Access Modifiers and Encapsulation</title>
</head>
<body>
    <h1>Access Modifiers</h1>

    <h3>Building Variables</h3>
    <p><?= $building->floors; ?></p>
    <p><?= $building->address; ?></p>

    <h2>Condominium Variables</h2>
    <p><?= $condominium->floors; ?></p>

    <h1>Encapsulation</h1>
    <p>The name of the condominium is <?= $condominium->getName(); ?></p>

    <?= $condominium->setName('Enzo Tower'); ?>
    <p>The name of the condominium has been change to <?= $condominium->getName(); ?></p>

    <?= $condominium->setFloors(8); ?>
    <p>The building has <?= $condominium->getFloors(); ?>  floors</p>
</body>
</html>