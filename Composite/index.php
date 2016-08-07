<?php
namespace Composite;

include 'bootstrap.php';

$tank = new Unit\Tank();
$tank2 = new Unit\Tank();
$soldier = new Unit\Soldier();
$army = new Unit\Army();

$army->addUnit($soldier);
$army->addUnit($tank);
$army->addUnit($tank2);

print $army->bombardStrength() . PHP_EOL;

$army->removeUnit($tank2);

print $army->bombardStrength() . PHP_EOL;

/* OUTPUT
16
12
*/