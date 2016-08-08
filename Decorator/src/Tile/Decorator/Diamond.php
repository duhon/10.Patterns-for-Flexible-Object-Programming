<?php
namespace Decorator\Decorator;

use Decorator\Decorator;

class Diamond extends Decorator
{
    function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}