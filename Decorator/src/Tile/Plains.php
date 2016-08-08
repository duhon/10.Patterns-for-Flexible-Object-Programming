<?php
namespace Decorator;

class Plains extends Tile
{
    private $wealthFactor = 2;

    function getWealthFactor()
    {
        return $this->wealthFactor;
    }
}