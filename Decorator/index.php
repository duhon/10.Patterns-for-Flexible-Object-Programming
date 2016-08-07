<?php
namespace Decorator;

include 'bootstrap.php';

$tile = new Plains\Polluted();
print $tile->getWealthFactor() . PHP_EOL;

/* OUTPUT
-2
*/