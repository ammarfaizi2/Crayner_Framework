<?php
namespace System;
use System\CraynerCore;
use System\Config_Handler;
class Model
{
	public function __construct()
	{
		
	}
	protected function db()
	{
		$this->db = new Database(Config_Handler::iq()->db());
	}
}