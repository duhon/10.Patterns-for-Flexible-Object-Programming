<?php
namespace Composite\Unit;

use Composite\Unit;

abstract class Composite extends Unit
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

    function getComposite()
    {
        return $this;
    }

    protected function units()
    {
        return $this->units;
    }
}