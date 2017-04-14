<?php
namespace App\Models;
use System\Model;

class index extends Model
{
	public function __construct()
	{
		parent::db();
	}
	public function login($user,$pass)
	{
		$st = $this->db->prepare("SELECT `password` FROM `account_data` WHERE `username`=:user LIMIT 1;");
		$st->execute(array(':user'=>$user));
		$st = $st->fetchAll(PDO::FETCH_NUM);
		
	}
}