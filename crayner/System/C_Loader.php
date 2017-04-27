<?php
namespace System;

class C_Loader
{
	public function __construct()
	{
		
	}
	public function view($view)
	{
		require __DIR__.'/../App/Views/'.$view.'.php';
	}
	public function helper($helper)
	{
		require __DIR__.'/Helper/'.$helper;
	}
}