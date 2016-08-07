<?php
namespace Composite;

include 'bootstrap.php';

// create an army
$main_army = new Unit\Army();

// add some units
$main_army->addUnit(new Unit\Archer());
$main_army->addUnit(new Unit\LaserCannon());

// create a new army
$sub_army = new Unit\Army();

// add some units
$sub_army->addUnit(new Unit\Archer());
$sub_army->addUnit(new Unit\Archer());
$sub_army->addUnit(new Unit\Archer());

// add the second army to the first
$main_army->addUnit($sub_army);

// all the calculations handled behind the scenes
print "attacking with strength: {$main_army->bombardStrength()}\n";

/* OUTPUT
attacking with strength: 60
*/