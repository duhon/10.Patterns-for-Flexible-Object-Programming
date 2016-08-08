<?php
namespace Decorator\Process;

use Decorator\ProcessRequest;

abstract class Decorate extends ProcessRequest
{
    protected $processrequest;

    function __construct(ProcessRequest $pr)
    {
        $this->processrequest = $pr;
    }
}