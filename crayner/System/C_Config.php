<?php
namespace System;

class C_Config
{
	public function __construct()
	{
		require __DIR__.'/../App/Config/config.php';
		$this->___cfg = $cf;
	}
	public function load($config)
	{
		require __DIR__.'/../App/Config/'.$config.'.php';
	}
}