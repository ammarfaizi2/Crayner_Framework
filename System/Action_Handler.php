<?php
namespace System;
use System\Core;

class Action_Handler
{
	public function __construct($uri)
	{
		$this->uri = $uri;
	}
	public function run()
	{
		if(!isset($this->uri[3]) and isset($this->uri[2]) and !empty($this->uri[2])){
			$a = "\\App\\Controllers\\{$this->uri[2]}";
			$method = 'index';
		} else
		if(isset($this->uri[3]) and !empty($this->uri[3])){
			$a = "\\App\\Controllers\\{$this->uri[2]}";
			$method = $this->uri[3];
		} else {
			$a = "\\App\\Controllers\\index";
			$method = 'index';
		}
		return (new $a())->$method();
	}
}