<?php
namespace Composite;

include 'bootstrap.php';

$troopCarrier = new Unit\Composite\TroopCarrier();
$cavalry = new Unit\Cavalry();

$troopCarrier->addUnit($cavalry);

/* OUTPUT
PHP Fatal error:  Uncaught Composite\Unit\Exception: Can't get a horse on the vehicle
*/