<?php
namespace System;

class C_Config
{
	public function load($config)
	{
		require __DIR__.'/../App/Config/'.$config.'.php';
	}
}