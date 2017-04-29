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
		$this->load->model('jmodel');
		print_r($this);
		print_r($this->jmodel->getall());
		$this->load	->view('index',array('aa'=>'welcome'));
	}
}