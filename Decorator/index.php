<?php
namespace Decorator;

declare(ticks=1);
include 'bootstrap.php';

$tile = new Plains();
echo $tile->getWealthFactor(); // 2

$tile = new Decorator\Diamond(new Plains());
print $tile->getWealthFactor(); // 4

$tile = new Decorator\Polluted(new Decorator\Diamond(new Plains()));
print $tile->getWealthFactor(); // 0

/* OUTPUT
2
4
0
*/