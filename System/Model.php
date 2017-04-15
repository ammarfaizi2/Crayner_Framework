<?php
namespace System;
use System\Core;

class Model extends Core
{
	protected $db;
	protected function db()
	{
		require __DIR__.'/../Config/Database.php';
		try{
				$pdo = new \PDO("{$cfg['driver']}:host={$cfg['host']};dbname={$cfg['dbname']}",$cfg['user'],$cfg['pass']);
		} catch(PDOException $e){
			var_dump($e);
		}
		$this->db = $pdo;
	}
	protected function need_hp($hp)
	{
		if(!function_exists($hp)){
			throw new \Exception("{$hp} must be loaded !");
		}
		return false;
	}
}