<?php
namespace Decorator\Process\Decorate;

use Decorator\Process\Decorate;
use Decorator\RequestHelper;

class AuthenticateRequest extends Decorate
{
    function process(RequestHelper $req)
    {
        print __CLASS__ . ": authenticating request\n";
        $this->processrequest->process($req);
    }
}