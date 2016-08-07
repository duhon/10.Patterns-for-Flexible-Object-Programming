<?php
namespace Composite;

class Army
{
    private $units = array();
    private $armies = array();

    function addUnit(Unit $unit)
    {
        array_push($this->units, $unit);
    }

    function addArmy(Army $army)
    {
        array_push($this->armies, $army);
    }

    function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }

        foreach ($this->armies as $army) {
            $ret += $army->bombardStrength();
        }

        return $ret;
    }
}