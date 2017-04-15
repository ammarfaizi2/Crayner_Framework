<?php
namespace App\Controllers;
use System\Controller;

class register extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('rstr');
		$this->load->helper('cookiemgr');
		$this->load->helper('teacrypt');
	}
	public function index()
	{
		$a = $this->load->model('register');
		if(isset($_POST['register']
		)){
			stcookie(array('fr'=>array(teacrypt(json_encode($_POST)),1200)));
			$a->validation($_POST);
			if($err=$a->errorInfo(true)){
				setcookie('alert',$err,time()+300);
				header('location:?ref=reg');
				exit();
			}
			$a->insert();
			if($err=$a->errorInfo(true)){
				setcookie('alert',$err,time()+300);
				header('location:?ref=reg&err=insert');
			}
			$b = $this->load->model('mklogin');
			if($b->mk_sess($a->uid) and 	$b->mk_ckp($a->uid)){
				rdr("/checkpoint/?ref=register");
			}
			exit('Error !');
		}
		$data['token'] = rstr();
		$key = rstr();
		stcookie(array(
			'reg_tkn'=>array(teacrypt($data['token'],$key),1200),
			'tknkey'=>array(strrev($key),1200)
		));
		$this->load->view('register',$data);
		return true;
	}
}