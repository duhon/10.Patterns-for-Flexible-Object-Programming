<?php
namespace Composite;

include 'bootstrap.php';

$archer = new Unit\Archer();
$archer2 = new Unit\Archer();
$archer->addUnit($archer2);
print $archer->bombardStrength() . PHP_EOL;

/* OUTPUT
PHP Fatal error:  Uncaught Composite\Unit\Exception: Composite\Unit\Archer is a leaf
*/