<?php
if(!function_exists('stcookie')){
	function stcookie($ck,$ev='+')
	{
		$tm = time();
		foreach($ck as $key => $val){
			$aa[] = setcookie($key,$val[0],($ev=="+"?$tm+$val[1]:$tm-$val[1]));
		}
		return $aa;
	}
}
if(!function_exists('clrcookie')){
	function clrcookie($exception=null)
	{
		$except = $exception===null?array():explode(',');
		foreach($_COOKIE as $key => $val){
			if(!in_array($key,$except)){
				$aa[]=setcookie($key,null,0);
			}
		}
		return $aa;
	}
}