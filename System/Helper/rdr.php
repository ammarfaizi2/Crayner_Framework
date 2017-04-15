<?php
if(!function_exists('rdr')){
	function rdr($to)
	{
		return header("location:".BSR.$to);
	}
}