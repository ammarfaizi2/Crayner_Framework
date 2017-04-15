<?php
namespace App\Controllers;
use System\Controller;

class register extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('rstr');
	}
	public function index()
	{
		$a = $this->load->model('register');
		if(isset($_POST['register'])){
			$a->validation($_POST);
			if($err=$a->errorInfo(true)){
				setcookie('alert',$err,time()+300);
				header('location:?ref=reg');
				exit();
			}
			exit();
		}
		$data['token'] = rstr();
		$this->load->view('register',$data);
		return true;
	}
}