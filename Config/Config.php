<?php
define('BASEURL','http'.(isset($_SERVER['HTTPS'])?'s':'').'://'.$_SERVER['HTTP_HOST']);
define('BASEPATH',realpath(__DIR__.'/..'));
define('BSR',BASEURL.'/index.php');
define('CORE_ENGINE',true);

ini_set("max_execution_time",500);
ini_set("memory_limit","4G");
ini_set("display_errors",true);
set_time_limit(500);
ignore_user_abort(false);
