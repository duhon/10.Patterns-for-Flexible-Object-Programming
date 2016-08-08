<?php
namespace Decorator;

abstract class Decorator extends Tile
{
    protected $tile;

    function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}