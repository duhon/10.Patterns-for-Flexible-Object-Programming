<?php
namespace Facade;

class ProductFacade
{
    private $products = array();

    function __construct($file)
    {
        $this->file = $file;
        $this->compile();
    }

    private function compile()
    {
        $lines = Manager::getProductFileLines($this->file);
        foreach ($lines as $line) {
            $id = Manager::getIDFromLine($line);
            $name = Manager::getNameFromLine($line);
            $this->products[$id] = Manager::getProductObjectFromID($id, $name);
        }
    }

    function getProducts()
    {
        return $this->products;
    }

    function getProduct($id)
    {
        if (isset($this->products[$id])) {
            return $this->products[$id];
        }
        return null;
    }
}