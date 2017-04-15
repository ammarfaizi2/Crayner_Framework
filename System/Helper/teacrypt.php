<?php
if(!function_exists('teacrypt')){
	function teacrypt($str,$key="1111aaaa")
	{
		return strrev(base64_encode(gzdeflate(\System\Tools\WhiteHat\Teacrypt::sgr21cr($str,$key))));
	}
}
if(!function_exists('teadecrypt')){
	function teadecrypt($str,$key="1111aaaa")
	{
		return \System\Tools\WhiteHat\Teacrypt::sgr21dr(gzinflate(base64_decode(strrev($str))),$key);
	}
}