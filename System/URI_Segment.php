<?php
namespace System;
use System\Core;

class URI_Segment extends Core
{
	public function gs()
	{
		$a = explode('?',$_SERVER['REQUEST_URI']);
		$a = explode('/',$a[0]);
		return $a;
	}
}