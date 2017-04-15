<?php
if(!function_exists('rstr')){
	function rstr($n=32,$a="",$b=null){
		$str = $b===null?"qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789___".$a:$b;$rt = '';
		$len = strlen($str)-1;
		for($i=0;$i<$n;$i++){
			$rt.=$str[rand(0,$len)];
		}
		return $rt;
	}
}