<?php
namespace Decorator\Process\Decorate;

use Decorator\Process\Decorate;
use Decorator\RequestHelper;

class StructureRequest extends Decorate
{
    function process(RequestHelper $req)
    {
        print __CLASS__ . ": structuring request data\n";
        $this->processrequest->process($req);
    }
}
