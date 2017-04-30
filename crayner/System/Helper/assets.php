<?php
if(!function_exists('js')){
	function js($file,$abs=false)
	{
		print '<script type="text/javascript" src="'.(BASEURL.JSURL).'/'.($abs?$file:$file.'.js').'">';
	}
}
if(!function_exists('css')){
	function css($file,$abs=false)
	{
		print '<link rel="stylesheet" type="text/css" href="'.(BASEURL.CSSURL).'/'.($abs?$file:$file.'.css').'">';
	}
}