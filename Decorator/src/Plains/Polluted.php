<?php
namespace Decorator\Plains;

use Decorator\Plains;

class Polluted extends Plains
{
    function getWealthFactor()
    {
        return parent::getWealthFactor() - 4;
    }
}