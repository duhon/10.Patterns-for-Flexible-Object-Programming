<?php
namespace Composite\Unit;

use Composite\Unit;

class Soldier extends Unit
{
    function addUnit(Unit $unit)
    {
    }

    function removeUnit(Unit $unit)
    {
    }

    function bombardStrength()
    {
        return 8;
    }
}