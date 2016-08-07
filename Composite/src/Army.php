<?php
namespace Composite;

class Army
{
    private $units = array();

    function addUnit(Unit $unit)
    {
        array_push($this->units, $unit);
    }

    function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}