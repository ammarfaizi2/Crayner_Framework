<?php
namespace Console;

use Console\Color\Colors;
/**
* 
*/
class Messages
{
	public static $ins;
	public function __construct()
	{
		self::$ins = new Colors();
	}
	public static function in()
	{
		if (self::$ins===null) {
			self::$ins = new self;
		}
		return self::$ins;
	}
	public static function Error($msg)
	{
		return self::in()->strclr($msg,'white','red');
	}
}