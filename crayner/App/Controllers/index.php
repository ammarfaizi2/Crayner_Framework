<?php
namespace App\Controllers;

use System\Controller;

/**
*
*		Created by icetea
*
*/
class index extends Controller
{
    /**
    * Controller constructor
    */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
    * Default method
    */
    public function index()
    {
        $this->load->view('welcome');
    }
}
