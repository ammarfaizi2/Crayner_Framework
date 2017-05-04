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
        #	header('content-type:text/plain');
        $this->load->helper('assets');
        css(11);
    }
}
