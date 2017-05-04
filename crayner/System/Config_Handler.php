<?php
namespace System;

class Config_Handler
{
    public static $instance;
    public static $db;
    public static $cf;
    public function __construct()
    {
        require __DIR__.'/../App/Config/config.php';
        self::$cf = $cf;
        self::$instance = $this;
    }
    public function autoload()
    {
        return self::$cf['autoload'];
    }
    public function router()
    {
        return self::$cf['router'];
    }
    public function db()
    {
        require __DIR__.'/../App/Config/database.php';
        return $cf;
    }
    public function assets($type)
    {
        return self::$cf['assets'][$type];
    }
    public static function iq()
    {
        if (self::$instance===null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
