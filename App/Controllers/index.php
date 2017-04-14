<?php
namespace App\Controllers;
use System\Controller;

class index extends Controller
{
	public function index()
	{
		echo "hello world<br>";
		$a = $this->load->model('index');
		print_r($a->aaa());
	}
}