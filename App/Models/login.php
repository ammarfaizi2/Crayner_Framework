<?php
namespace App\Models;
use System\Model;
use PDO;

class login extends Model
{
	public function __construct()
	{
		parent::db();
	}
	public function chk_login()
	{
		
	}
	public function form()
	{
		return true;
	}
}