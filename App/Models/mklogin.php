<?php
namespace App\Models;
use System\Model;
use PDO;
class mklogin extends Model
{
	public function __construct()
	{
		parent::db();
	}
	public function mk_sess($uid)
	{
		parent::need_hp('rstr');
		parent::need_hp('stcookie');
		$st = $this->db->prepare("SELECT `ukey` FROM `account_data` WHERE `userid`=:uid LIMIT 1;");
		$st->execute(array(
			':uid'=>$uid
		));
		$st = $st->fetch(PDO::FETCH_NUM);
		if(!isset($st[0])){
			return false;
		}
		$ukey = $st[0];
		$sess = rstr(50).'_'.$uid;
		$info = teacrypt(json_encode(
			array(
			 'ua'=>$_SERVER['HTTP_USER_AGENT'],
			 'ip'=>$_SERVER['REMOTE_ADDR']
			)
		)
		,$ukey
		);
		$ex = 3600*24*14;
		$st = $this->db->prepare("INSERT INTO `login_session` (`userid`,`session`,`login_at`,`expired`,`info`) VALUES (:a,:b,:c,:d,:e);");
		$st->execute(array(
				':a'=>$uid,
				':b'=>$sess,
				':c'=>(date("Y-m-d H:i:s")),
				':d'=>(date("Y-m-d H:i:s",time()+($ex))),
				':e'=>$info
		)
		);
		stcookie(array(
			'sess'=>array(teacrypt($sess,$ukey),$ex),
			'uid'=>array($uid,$ex),
			'wg'=>array(rstr(64),$ex),
			'c_user'=>array($uid.'_'.rstr(15),$ex),
			'login'=>array('true',$ex)
		));
		return true;
	}
	public function mk_ckp($uid)
	{
		return true;
	}
}