<?php
namespace System;
use System\Core;
use System\Database;
class Model extends Core
{
	protected $db;
	protected function db()
	{
		$this->db = new Database();
	}
	protected function need_hp($hp)
	{
		if(!function_exists($hp)){
			throw new \Exception("{$hp} must be loaded !");
		}
		return false;
	}
}