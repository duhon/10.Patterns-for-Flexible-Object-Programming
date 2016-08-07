<?php
namespace Composite;

abstract class Unit
{
    private $id = 0;

    public function __construct()
    {
        static $id = 0;
        $this->id = $id++;
    }

    function addUnit(Unit $unit)
    {
        throw new Unit\Exception(get_class($this) . " is a leaf");
    }

    function removeUnit(Unit $unit)
    {
        throw new Unit\Exception(get_class($this) . " is a leaf");
    }

    abstract function bombardStrength();
}