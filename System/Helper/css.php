<?php
if(!function_exists('css')){
	function css($css,$abs=false)
	{
		print '<link rel="text/css" href="'.(BASEURL.'/css/'.$css.($abs==true?''.'.css')).'">'.PHP_EOL;
		return false;
	}
}	