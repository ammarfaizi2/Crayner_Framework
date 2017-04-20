<?php
namespace System;

class Database
{
	public function __construct()
	{
			require __DIR__.'/../Config/Database.php';
		try{
				$pdo = new \PDO("{$cfg['driver']}:host={$cfg['host']};dbname={$cfg['dbname']}",$cfg['user'],$cfg['pass']);
		} catch(PDOException $e){
			var_dump($e);
		}
		$this->db = $pdo;
	}
	public function pdo()
	{
		return $this->db();
	}
	public function query($query)
	{
		return $this->db->query($query);
	}
	public function select($table,$fields=null,$clause=null)
	{
		$fields = $field===null?"*":$fields;
		$q = "SELECT {$fields} FROM {$table}";
		if(is_array($clause)){
			
		} else {
			$q.=' '.$clause;
		}
		return $this->db->prepare($q);
	}
}