<?php
namespace Facade;

declare(ticks=1);
include 'bootstrap.php';

$lines = Manager::getProductFileLines('data/test.txt');
$objects = array();
foreach ($lines as $line) {
    $id = Manager::getIDFromLine($line);
    $name = Manager::getNameFromLine($line);
    $objects[$id] = Manager::getProductObjectFromID($id, $name);
}

print_r($objects);

/* OUTPUT
Array
(
    [234] => Facade\Product Object
        (
            [id] => 234
            [name] => ladies jumper
        )

    [532] => Facade\Product Object
        (
            [id] => 532
            [name] => gents hat
        )

)
*/