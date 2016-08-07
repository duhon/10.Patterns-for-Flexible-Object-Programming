<?php
namespace Composite\Unit\Composite;

use Composite\Unit\Composite;

class Army extends Composite
{
    function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units() as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}