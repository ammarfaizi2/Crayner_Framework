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
		*		Controller Config
		*/
		$this->config = new C_Config();
		
		/**
		* Autoload
		*/
		$this->autoload($this->config->autoload);
		
		/**
		*		Loader
		*/
		$this->load = $this;
	}
	protected function model($model,$as=null)
	{
		$as = $as===null?$model:$as;
		$model = "App\\Models\\{$model}";
		$this->$as = new $model();
	}
	private function autoload($autoload)
	{
		
	}
	public function view($view,$___)
	{
		foreach($___ as $____ => $__){
			$$____ = $__;
		}
		require __DIR__.'/../App/Views/'.$view.'.php';
	}
	public function helper($helper)
	{
		require __DIR__.'/Helper/'.$helper;
	}
}