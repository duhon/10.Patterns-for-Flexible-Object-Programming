<?php
namespace Decorator;

abstract class ProcessRequest
{
    abstract function process(RequestHelper $req);
}