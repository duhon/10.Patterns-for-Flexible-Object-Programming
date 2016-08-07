<?php
namespace Composite\Unit;

use Composite\Unit;

class Army extends Unit
{
    private $units;

    public function __construct()
    {
        $this->units = new \SplObjectStorage();
        parent::__construct();
    }

    function addUnit(Unit $unit)
    {
        if (!$this->units->contains($unit)) {
            $this->units->attach($unit);
        }
    }

    function removeUnit(Unit $unit)
    {
        $this->units->detach($unit);
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