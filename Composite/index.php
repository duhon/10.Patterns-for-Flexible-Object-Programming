<?php
namespace Composite;

include 'bootstrap.php';

$unit1 = new Unit\Archer();
$unit2 = new Unit\LaserCannon();
$army = new Army();
$army->addUnit($unit1);
$army->addUnit($unit2);
print $army->bombardStrength() . PHP_EOL;

/* OUTPUT
48
*/