<?php
namespace App\Controllers;
use System\Controller;

class register extends Controller
{
	public function index()
	{
		return $this->load->view('register');
	}
}