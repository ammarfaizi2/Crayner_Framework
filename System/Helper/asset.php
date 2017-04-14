<?php
if(!function_exists('css')){
	function css($css,$abs=false)
	{
		print '<link rel="text/css" href="'.(BASEURL.'/css/'.$css.($abs==true?''.'.css')).'">'.PHP_EOL;
		return false;
	}
}
if(!function_exists('js')){
	function js($js,$abs=false)
	{
		print '<script type="text/javascript" src="'.(BASEURL.'/js/'.$js.($abs==true?''.'.js')).'">'.PHP_EOL;
		return false;
	}
}	