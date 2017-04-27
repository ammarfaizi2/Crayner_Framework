<?php
namespace System;
class Uri_Segmemt
{
	 public static function getUriSegments()
	{
		return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	}
	public static function getUriSegment($n)
	{
		$segs = self::getUriSegments();
		return count($segs)>0&&count($segs)>=($n-1)?$segs[$n]:'';
	}
}