<?php
namespace Decorator\Process;

use Decorator\ProcessRequest;
use Decorator\RequestHelper;

class Main extends ProcessRequest
{
    function process(RequestHelper $req)
    {
        print __CLASS__ . ": doing something useful with request\n";
    }
}