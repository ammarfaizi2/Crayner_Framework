<?php
namespace App\Controllers;
use System\Controller;

class register extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if(isset($_POST['register'])){
			$a = $this->load->model('register');
			$a->validation($_POST);
			if($err=$a->errorInfo(true)){
				setcookie('alert',$err,time()+300);
				header('location:?ref=reg');
				exit();
			}
			exit();
		}
		$data['token'] = array();
		$this->load->view('register');
		return true;
	}
}