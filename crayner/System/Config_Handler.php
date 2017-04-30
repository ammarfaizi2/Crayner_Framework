<?php
namespace System;
class Config_Handler
{
	public static $instance;
	public $db;
	public $cf;
	public function __construct()
	{
		require __DIR__.'/../App/Config/config.php';
		$this->cf = $cf;
		require __DIR__.'/../App/Config/database.php';
		$this->db = $cf;
		self::$instance = $this;
	}
	public function autoload()
	{
		return $this->cf['autoload'];
	}
	public function router()
	{
		return $this->cf['router'];
	}
	public function db()
	{
		return $this->db;
	}
	public static function iq()
	{
		if(self::$instance===null){
			self::$instance = new self;
		}
		return self::$instance;
	}
}