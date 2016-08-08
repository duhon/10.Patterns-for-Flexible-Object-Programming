<?php
namespace Decorator;

declare(ticks=1);
include 'bootstrap.php';

$process = new Process\Decorate\AuthenticateRequest(
    new Process\Decorate\StructureRequest(
        new Process\Decorate\LogRequest (
            new Process\Main()
        )
    )
);
$process->process(new RequestHelper());

/* OUTPUT
Decorator\Process\Decorate\AuthenticateRequest: authenticating request
Decorator\Process\Decorate\StructureRequest: structuring request data
Decorator\Process\Decorate\LogRequest: logging request
Decorator\Process\Main: doing something useful with request
*/