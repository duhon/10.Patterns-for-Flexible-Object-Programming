<?php
namespace Decorator\Plains;

use Decorator\Plains;

class Diamond extends Plains
{
    function getWealthFactor()
    {
        return parent::getWealthFactor() + 2;
    }
}