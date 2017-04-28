<?php
namespace System;
class Uri_Segment
{
	public static function getUriSegments()
	{
		return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	}
	public static function getUriSegment($n,$segs)
	{
		$c = count($segs);
		return isset($segs[$n])&&!empty($segs[$n])?$segs[$n]:'';
	}
}