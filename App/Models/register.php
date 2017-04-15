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
}
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
		$ada = false;
		do{
			
		}while($ada);
		$st = $this->db->prepare("INSERT INTO `account_data` (`userid`,`username`,`email`,`ukey`,`password`,`authority`) VALUES (:a,:b,:c,:d,:e,:f);");
		$st->execute(array(
		':a'=>''
		
		));
	}
}