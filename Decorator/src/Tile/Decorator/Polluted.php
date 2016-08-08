<?php
namespace Decorator\Decorator;

use Decorator\Decorator;

class Polluted extends Decorator
{
    function getWealthFactor()
    {
        return $this->tile->getWealthFactor() - 4;
    }
}