<?php
namespace System;
class Core
{
	protected $core;
	public function __construct()
	{
		$this->core = $this;
	}
	protected function db()
	{
		require __DIR__.'/../Config/Database.php';
		try{
				$pdo =new \PDO("{$cfg['driver']}:host={$cfg['host']};dbname={$cfg['dbname']}",$cfg['user'],$cfg['pass']);
		} catch(PDOException $e){
			var_dump($e);
		}
		return $pdo;
	}
}