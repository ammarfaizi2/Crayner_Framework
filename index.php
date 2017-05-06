<?php
/**
*
* Crayner PHP Framework
* Crayner System
*
*/
require __DIR__ . '/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', true);
use System\Crayner;
use System\Config_Handler;

$app = new Crayner();
$app->run();
