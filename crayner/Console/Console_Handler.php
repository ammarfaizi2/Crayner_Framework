<?php
namespace Console;

class Console_Handler
{
	public function __construct($ar)
	{
		$this->handler = new Action_Handler($ar);
		$this->action = $this->handler->run();
	}
	public function run()
	{
		exit($this->action);
	}
}