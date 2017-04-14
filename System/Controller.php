<?php
namespace System;
use System\Core;

class Controller
{
	public function __construct()
	{
		$this->load = $this;
	}
	protected function model($model)
	{
		$model = "\\App\\Models\\{$model}";
		return new $model();
	}
	protected function view($view,$___=null)
	{
		if(isset($___)){
			foreach($___ as $a => $b){
				$$a = $b;
			}
		}
		unset($___);
		require __DIR__."/../App/Views/{$view}.blade.php";
	}
}