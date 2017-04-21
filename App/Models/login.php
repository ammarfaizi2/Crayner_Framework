<?php
namespace App\Models;
use System\Model;


class login extends Model
{
	public function __construct()
	{
		parent::db();
		parent::need_hp("rstr");
		parent::need_hp("stcookie");
		parent::need_hp("teacrypt");
	}
	public function check_login()
	{
		if(!isset($_POST['username'],$_POST['password'],$_POST['token'],$_POST['vi'],$_COOKIE['token'],$_COOKIE['token_key'])){
			die("Error !");
		}
		if(teadecrypt($_COOKIE['token'],$_COOKIE['token_key'])!=$_POST['token']){
			die("Illegal Action !");
		}
		$st=$this->db->select_pr('account_data','ukey,password,userid','WHERE `username`=:user LIMIT 1;');
		$st->execute(array(':user'=>$_POST['username']));
		$dt = $st->fetch(PDO::FETCH_NUM);
		return $dt!==false&&teadecrypt($dt[1],strrev($dt[0]))==$_POST['password']?$dt[2]:false;
	}
	public function mksess($id)
	{
		$now = time();
		$sess = rstr(64).'_'.$id;
		$key = rstr(32);
		$exp = 3600*24*14;
		stcookie(array(
			'usess'=>array(teacrypt($sess,$key),$exp),
			'usess_key'=>array($key,$exp),
			'userid'=>array(teacrypt($id,$key),$exp),
			'fgc_login'=>array('true',$exp)
		));
		$this->db->insert("login_session",array("userid"=>$id,"session"=>$sess,"login_at"=>(date("Y-m-d H:i:s",$now)),"expired"=>(date("Y-m-d H:i:s",$now+$exp)),"info"=>json_encode(array(
		'ip'=>$_SERVER['REMOTE_ADDR'],
		'ua'=>$_SERVER['HTTP_USERAGENT']
		))));
	}
	public function gentoken()
	{
		$tkn = rstr(64);
		$key = rstr(32);
		$enc = teacrypt($tkn,$key);
		stcookie(array(
			'token'=>array($enc,1200),
			'token_key'=>array($key,1200),
			'vi_ck'=>array(rstr(64),3600)
		));
		return array('token'=>$tkn,'vi'=>rstr(32));
	}
	public function form()
	{
		return true;
	}
}