<?php
namespace Console;

class ActionHandler
{
    private $cmd;
    public function __construct($cmd)
    {
        $this->cmd = explode(' ',$cmd);
    }
    public function cmd1($cmd,$sbcmd=null,$arg2=null)
    {
        $command = array(
                'make'   => 'Make',
                'delete' => 'Delete',
            );
    }
    public function run()
    {
        $a = explode(':', $this->cmd[1]);
        if (count($a)==2) {
            $this->cmd1($a[0],$a[1],(isset($this->cmd[2])?$this->cmd[2]:null),(isset($this->cmd[3])?$this->cmd[3]:null));
        }
    }
}
