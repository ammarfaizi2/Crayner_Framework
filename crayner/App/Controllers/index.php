<?php 
namespace App\Controllers;
use System\Controller;

class index extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->helper('assets');
		css(11);
		$this->load->model('jmodel');
		$this->load	->view('index',array('aa'=>'welcome'));
	}
}