<?php
namespace Console;
use Console\ActionHandler;
class ConsoleHandler
{
    public function __construct($ar)
    {
        $ar[0]=='icetea' or die("\nError verify icetea file !\n");
        count($ar)==1 and $this->info();
        $this->handler = new ActionHandler($ar);
        $this->action = $this->handler->run();
    }
    private function info()
    {
        
        die;
    }
    public function run()
    {
        exit($this->action);
    }
}
