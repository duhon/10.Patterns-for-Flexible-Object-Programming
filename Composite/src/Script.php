<?php
namespace Composite;

class Script
{
    static function joinExisting(Unit $newUnit, Unit $occupyingUnit)
    {
        /** @var $comp Unit\Composite */
        if (!is_null($comp = $occupyingUnit->getComposite())) {
            $comp->addUnit($newUnit);
        } else {
            $comp = new Unit\Composite\Army();
            $comp->addUnit($occupyingUnit);
            $comp->addUnit($newUnit);
        }
        return $comp;
    }
}