<?php
namespace Composite;

include 'bootstrap.php';

$army1 = new Unit\Composite\Army();
$army1->addUnit(new Unit\Archer());
$army1->addUnit(new Unit\Archer());

$army2 = new Unit\Composite\Army();
$army2->addUnit(new Unit\Archer());
$army2->addUnit(new Unit\Archer());
$army2->addUnit(new Unit\LaserCannon());

$composite = Script::joinExisting($army2, $army1);
print_r($composite);

/* OUTPUT
Composite\Unit\Composite\Army Object
(
    [units:Composite\Unit\Composite:private] => SplObjectStorage Object
        (
            [1] => Composite\Unit\Archer Object
            [2] => Composite\Unit\Archer Object
            [3] => Composite\Unit\Composite\Army Object
                (
                    [units:Composite\Unit\Composite:private] => SplObjectStorage Object
                        (
                            [4] => Composite\Unit\Archer Object
                            [5] => Composite\Unit\Archer Object
                            [6] => Composite\Unit\LaserCannon Object
                        )

                )
        )
    [id:Composite\Unit:private] => 0
)
*/