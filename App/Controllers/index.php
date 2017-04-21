<?php
namespace App\Controllers;
use System\Controller;
defined("CORE_ENGINE") or die();
class index extends Controller
{
	public function __construct()
	{
		parent::__construct();
$this->load->helper("rstr");
$this->load->helper("cookiemgr");
$this->load->helper("teacrypt");
	}
	public function index()
	{
		$md = $this->load->model("login");
		if(isset($_POST['login'])){
			/*/ cek login */
			if($u=$md->check_login()){
				/*/ buat sessionn */
				$md->mksess($u);
				header("location:");
				exit("Login Success !");
			} else {
				header("location:?ref=login&err=login");
				exit("Login Failed !");
			}
		}
		
		$this->load->view("login",array('token'=>$md->gentoken()));
		return true;
	}
}