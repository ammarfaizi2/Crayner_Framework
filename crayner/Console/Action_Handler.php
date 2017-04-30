<?php
namespace Console;

class Action_Handler
{
	private $cmd;
	public function __construct($cmd)
	{
		$this->cmd = $cmd;
	}
	public function run()
	{
		print_r($this);
		switch($this->cmd[1]){
		case 'make:controller':
			return $this->make('controller',$this->cmd[2]);
			break;
		case 'make:model':
				return $this->make('model',$this->cmd[2]);
				break;
		default:
				return "\nUnknown Command !\n\n";
				break;
		}
	}
}