<?php
namespace App\Models;
use System\Model;

class jmodel extends Model
{
	public function __construct()
	{
		parent::__construct();
		parent::db();
	}
	public function getall()
	{
		return $this->db->query("SELECT * FROM account_data")->fetch();
	}
}