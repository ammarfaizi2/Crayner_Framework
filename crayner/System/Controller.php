<?php
namespace System;
use System\CraynerCore;
use System\C_Loader;
use System\C_Config;
/**
*
*		@author Ammar Faizi <ammarfaizi2@gmail.com>
*		@license RedAngel PHP Concept
*
*/
class Controller extends CraynerCore
{
	public function __construct()
	{
		/**
		*		Controller loader
		*/
		$this->load = new C_Loader();
		
		/**
		*		Controller Config
		*/
		$this->config = new C_Config();
		
		/**
		* Autoload
		*/
		$this->autoload($this->config->autoload);
	}
	private function autoload($autoload)
	{
		
	}
	
}
