<?php
namespace Console;

class ActionHandler
{
    private $cmd;
    public function __construct($cmd)
    {
        $this->cmd = $cmd;
    }
}
