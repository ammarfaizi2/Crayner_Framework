<?php
namespace System;

class C_Loader
{
	protected $cf;
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
	public function model($model,$as=null)
	{
		$as = $as===null?$model:$as;
		$model = "App\\Models\\{$model}";
		$this->$as = new $model();
	}
}