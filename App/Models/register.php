<?php
namespace App\Models;
use System\Model;

class register extends Model
{
	public function __construct()
	{
		parent::db();
		$this->err = false;
	}
	public function validation($data)
	{
		if(isset($data['name'],$data['email'],$data['birthloc'],$data['tgl'],$data['bln'],$data['thn'],$data['religion'],$data['phone'],$data['username'],$data['password'],$data['cpassword']) and !empty($data['name']) and !empty($data['email']) and !empty($data['birthloc']) and !empty($data['tgl']) and !empty($data['bln']) and !empty($data['thn']) and !empty($data['religion']) and !empty($data['phone']) and !empty($data['username']) and !empty($data['password']) and !empty($data['cpassword'])){

		} else {
			$this->err = "Data yang anda masukkan belum lengkap !";
		}
		return false;
	}
	public function errorInfo($a=0)
	{
		return $this->err;
	}
	public function insert()
	{
		
	}
}