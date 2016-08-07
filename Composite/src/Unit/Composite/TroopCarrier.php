<?php
namespace Composite\Unit\Composite;

use Composite\Unit\Composite;
use Composite\Unit;

class TroopCarrier extends Unit\Composite
{
    function addUnit(Unit $unit)
    {
        if ($unit instanceof Unit\Cavalry) {
            throw new Unit\Exception("Can't get a horse on the vehicle");
        }
        parent::addUnit($unit);
    }

    function bombardStrength()
    {
        return 0;
    }
}