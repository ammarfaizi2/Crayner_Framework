<?php
namespace Console;

use Console\ActionHandler;
use Console\Color\Colors;
class ConsoleHandler
{
    public function __construct($ar)
    {
        $this->clr = new Colors();
        $ar[0]=='icetea' or die("\nError verify icetea file !\n");
        count($ar)==1 and $this->info();
        $this->handler = new ActionHandler($ar);
        $this->action = $this->handler->run();
    }
    private function info()
    {
        print $this->clr->getColoredString("halo","red");
        die;
    }
    public function run()
    {
        exit($this->action);
    }
}
