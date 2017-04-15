<?php
namespace App\Models;
use System\Model;
use PDO; 
class register extends Model
{
	public function __construct()
	{
		parent::db();
		$this->err = false;
		$this->data = null;
	}
	private function check_pri($field,$val)
	{
		$st = $this->db->prepare("SELECT COUNT(`{$field}`) FROM `account_data` WHERE `{$field}`=:pp LIMIT 1;");
		$st->execute(array(':pp'=>$val));
		$st = $st->fetch(PDO::FETCH_NUM);
		return (bool)$st[0];
	}
	public function validation($data)
	{
		if(isset($_COOKIE['reg_tkn'],$_COOKIE['tknkey'],$data['rtoken']) and teadecrypt($_COOKIE['reg_tkn'],strrev($_COOKIE['tknkey']))==$data['rtoken']){
		if(isset($data['name'],$data['email'],$data['birthloc'],$data['tgl'],$data['bln'],$data['thn'],$data['religion'],$data['phone'],$data['username'],$data['password'],$data['cpassword']) and !empty($data['name']) and !empty($data['email']) and !empty($data['birthloc']) and !empty($data['tgl']) and !empty($data['bln']) and !empty($data['thn']) and !empty($data['religion']) and !empty($data['phone']) and !empty($data['username']) and !empty($data['password']) and !empty($data['cpassword'])){
$l = array(
'username'=>strlen($data['username']),
'password'=>strlen($data['password']),
'phone'=>strlen($data['phone'])
);
if(preg_match("#[^a-zA-Z\s\']#",$data['name'])){
	$this->err = "Nama tidak boleh menggunakan karakter khusus !";
}	 else
if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
	$this->err = "E-Mail salah !";
} else
if($l['phone']<5 or $l['phone']>20){
	$this->err = "Nomor HP salah !";
} else
if(preg_match("#[^\w\d\_\.]#",$data['username'])){
	$this->err = "Username hanya boleh memakai karakter a-z A-Z 0-9 _ dan . (titik)";
} else
if($l['username']<5){
	$this->err = "Username terlalu pendek ! (Min 5 karakter)";
} else
if($l['username']>32){
	$this->err = "Username terlalu panjang ! (Max 32 karakter)";
} else 
if($data['password']!=$data['cpassword']){
	$this->err = "Konfirmasi password tidak sama !";
} else
if($l['password']<6){
	$this->err = "Password terlalu pendek ! (Min 6 karakter)";
} else 
if($l['password']>3600){
	$this->err = "Password terlalu panjang ! (Max 3600 karakter)";
} else 
if($this->check_pri('username',$data['username'])){
	$this->err = "Username sudah digunakan !";
} else
if($this->check_pri('email',$data['email'])){
	$this->err = "E-Mail sudah digunakan !";
} else {
	$this->err = false;
	$this->data = $data;
	$this->data['birthdate'] = $data['thn'].'-'.$data['bln'].'-'.$data['tgl'];
}
		} else {
			$this->err = "Data yang anda masukkan belum lengkap !";
		}
		} else {
			$this->err = "Invalid token !";
		}
		return false;
	}
	public function errorInfo($a=0)
	{
		return $this->err===false?false:teacrypt($this->err);
	}
	public function insert()
	{
		$ada = false;
		$st = $this->db->prepare("SELECT `userid` FROM `account_data` ORDER BY `userid` DESC LIMIT 1;");
	 $st->execute();
	 $st = $st->fetch(PDO::FETCH_NUM);
	 $uid = $st[0]+1;
	 $ukey = rstr(72);
		$st = $this->db->prepare("INSERT INTO `account_data` (`userid`,`username`,`email`,`ukey`,`password`,`authority`,`verified`,`blocked`,`registered_at`) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i);");
		$st->execute(array(
		':a'=>$uid,
		':b'=>$this->data['username'],
		':c'=>$this->data['email'],
		':d'=>strrev($ukey),
		':e'=>teacrypt($this->data['password'],$ukey),
		':f'=>'user',
		':g'=>'false',
		':h'=>'true',
		':i'=>(date("Y-m-d H:i:s"))
		));
		$st = $this->db->prepare("INSERT INTO `account_info` (`userid`,`name`,`address`,`birthloc`,`birthdate`,`religion`,`phone`) VALUES (:a,:b,:c,:d,:e,:f,:g);");
		$st->execute(array(
			':a'=>$uid,
			':b'=>ucfirst(strtolower($this->data['name'])),
			':c'=>$this->data['address'],
			':d'=>$this->data['birthloc'],
			':e'=>$this->data['birthdate'],
			':f'=>$this->data['birthloc'],
			':g'=>$this->data['phone']
		));
	}
}