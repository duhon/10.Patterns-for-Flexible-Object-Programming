<?php
namespace Facade;

declare(ticks=1);
include 'bootstrap.php';

$facade = new ProductFacade('data/test.txt');
$object = $facade->getProduct(234);

print_r($object);

/* OUTPUT
Facade\Product Object
(
    [id] => 234
    [name] => ladies jumper
)
*/