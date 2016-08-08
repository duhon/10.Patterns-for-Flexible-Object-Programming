<?php
namespace Facade;

class Manager
{
    static function getProductFileLines($file)
    {
        return file($file);
    }

    static function getProductObjectFromId($id, $productname)
    {
        // some kind of database lookup
        return new Product($id, $productname);
    }

    static function getNameFromLine($line)
    {
        if (preg_match("/.*-(.*)\s\d+/", $line, $array)) {
            return str_replace('_', ' ', $array[1]);
        }
        return '';
    }

    static function getIDFromLine($line)
    {
        if (preg_match("/^(\d{1,3})-/", $line, $array)) {
            return $array[1];
        }
        return -1;
    }
}