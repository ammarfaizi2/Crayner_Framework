<?php
namespace App\Controllers;
use System\Controller;

class index extends Controller
{
	public function index()
	{
		$lg = $this->load->model('login_status');
		$lg = $lg->status();
		if($lg===true){
			$this->load->view('home');
		} else {
			$a = $this->load->model('login');
			if(isset($_POST['login'])){
				
				exit();
			}
			$a->form();
			#$data = array('token'=>$a->token());
			$this->load->view('login');
		}
		return true;
	}
}