<?php
define('BASEURL','http'.(isset($_SERVER['HTTPS'])?'s':'').'://'.$_SERVER['HTTP_HOST']);
define('BASEPATH',realpath(__DIR__.'/..'));
define('BSR',BASEURL.'/index.php');