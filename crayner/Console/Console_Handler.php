<?php
namespace Console;

class Console_Handler
{
	public function __construct($ar)
	{
		$ar[0]=='icetea' or die("\nError verify icetea file !\n");
		$this->handler = new Action_Handler($ar);
		$this->action = $this->handler->run();
	}
	public function run()
	{
		exit($this->action);
	}
}