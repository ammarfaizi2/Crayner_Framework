<?php
namespace System;
/**
*
*		@author Ammar Faizi <ammarfaizi2@gmail.com>
*		@license RedAngel PHP Concept
*
*/
class CraynerCore implements Core
{
	protected $router;
	public function __construct()
	{
		require __DIR__.'/../App/Config/config.php';
		$this->router = $cf['router'];
	}
	public function database()
	{
	
	}
	public function config()
	{
		
	}
}