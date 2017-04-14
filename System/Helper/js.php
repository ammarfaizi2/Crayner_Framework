<?php
if(!function_exists('js')){
	function js($js,$abs=false)
	{
		print '<script type="text/javascript" src="'.(BASEURL.'/js/'.$js.($abs==true?''.'.css')).'">'.PHP_EOL;
		return false;
	}
}	