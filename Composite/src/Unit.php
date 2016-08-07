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

    abstract function addUnit(Unit $unit);

    abstract function removeUnit(Unit $unit);

    abstract function bombardStrength();
}