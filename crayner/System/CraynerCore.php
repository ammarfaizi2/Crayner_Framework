<?php
namespace System;
/**
*
*		@author Ammar Faizi <ammarfaizi2@gmail.com>
*		@license RedAngel PHP Concept
*
*/
class CraynerCore extends CoreHandler implements Core
{
	protected $router;
	public function __construct()
	{
		require __DIR__.'/../App/Config/config.php';
		$this->config = $cf;
	}
	public function database()
	{
	
	}
	public function config()
	{
		
	}
	public function getrouter()
	{
		return $this->cf['router'];
	}
}