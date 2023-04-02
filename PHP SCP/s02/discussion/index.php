<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>S02: Repetition Control Structures & Array Manipulation</title>
</head>

<body>
    <h1>Repetition</h1>

    <h3>While Loop</h3>
    <?= whileLoop(); ?>

    <h3>Do-While Loop</h3>
    <?= doWhileLoop(); ?>

    <h3>For Loop</h3>
    <?= forLoop(); ?>

    <h3>Continue/Break Statement</h3>
    <?= modifiedForLoop(); ?>

    <h1>Array and Array Manipulation</h1>
    <h3>Simple Array</h3>
    <ul>
        <?php foreach ($computerBrands as $brand) { ?>
            <li><?= $brand; ?></li>
        <?php } ?>
    </ul>

    <h3>Associative Array</h3>
    <ul>
        <?php foreach ($gradePeriods as $periods => $grades) { ?>
            <li>Grade in <?= $periods; ?> is <?= $grades; ?></li>
        <?php } ?>
    </ul>

    <h3>Multidimensional Array</h3>
    <ul>
        <?php foreach ($heroes as $team) {  
            foreach ($team as $member) { ?>
                <li><?= $member; ?></li>
        <?php }} ?>
    </ul>

    <h3>Two-Dimensional Associative Array</h3>
    <ul>
        <?php 
            foreach($ironManPowers as $label => $powerGroup) {
                foreach($powerGroup as $power) { ?>
                    <li><?= "$label: $power" ?></li>
        <?php }} ?>
    </ul>

    <h2>Array Functions</h2>
    <h3>Sorting</h3>
    <pre><?php print_r($sortedBrands); ?></pre>
    <h3>Sorting (Reverse) </h3>
    <pre><?php print_r($reverseSortedBrand); ?></pre>

    <h3>Append</h3>
    <?php array_push($computerBrands, 'Apple'); ?>
    <pre><?php print_r($computerBrands); ?></pre>

    <h3>Unshift</h3>
    <?php array_unshift($computerBrands, 'Dell'); ?>
    <pre><?php print_r($computerBrands); ?></pre>

    <h3>Remove</h3>
    <?php array_pop($computerBrands); ?>
    <pre><?php print_r($computerBrands); ?></pre>

    <h3>Shift</h3>
    <?php array_shift($computerBrands); ?>
    <pre><?php print_r($computerBrands); ?></pre>

    <h3>Count</h3>
    <pre><?= count($computerBrands); ?></pre>

    <h3>In Array</h3>
    <p><?= searchBrand($computerBrands, 'HP'); ?></p>

    <h3>Reverse (not A-Z sorting)</h3>
    <pre><?php print_r($reverseGradePeriods); ?></pre>

</body>

</html>