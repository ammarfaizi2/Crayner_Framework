<?php
namespace App\Models;
use System\Model;

class login_status extends Model
{
	public function __construct()
	{
		
	}
	public function status()
	{
		if(isset($_COOKIE['sess'],$_COOKIE['user'],$_COOKIE['vc']))
		{
			
		} else {
			$lg = false;
		}
		return $lg;
	}
}