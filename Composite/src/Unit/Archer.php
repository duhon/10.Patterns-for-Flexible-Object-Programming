<?php
namespace Composite\Unit;

use Composite\Unit;

class Archer extends Unit
{
    function addUnit(Unit $unit)
    {
        throw new Exception(get_class($this) . " is a leaf");
    }

    function removeUnit(Unit $unit)
    {
        throw new Exception(get_class($this) . " is a leaf");
    }

    function bombardStrength()
    {
        return 4;
    }
}