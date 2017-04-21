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
	public function select_pr($table,$fields=null,$clause=null)
	{
		$fields = $fields===null?"*":$fields;
		$q = "SELECT {$fields} FROM {$table}";
		if(is_array($clause)){
			
		} else {
			$q.=' '.$clause;
		}
		return $this->db->prepare($q);
	}
	public function insert($table,$val)
	{
		$fields = $bound = '';
		$data = array();
		foreach($val as $a => $b){
			$fields.= "`{$a}`,";
			$bound.= ":{$a},";
			$data[':'.$a] = $b;
		}
		return $this->db->preapre("INSERT INTO {$table} ({$fields}) VALUES ({$bound});")->execute($data);
	}
}