<?php
namespace Decorator\Process\Decorate;

use Decorator\Process\Decorate;
use Decorator\RequestHelper;

class LogRequest extends Decorate
{
    function process(RequestHelper $req)
    {
        print __CLASS__ . ": logging request\n";
        $this->processrequest->process($req);
    }
}