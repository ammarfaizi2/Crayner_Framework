<?php
namespace System;

class C_Loader
{
	public function __construct($cf)
	{
		$this->cf = $cf;
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
	public function database()
	{
		return new \PDO($this->cf['driver'].':host='.$this->cf['host'].'; ')
	}
}