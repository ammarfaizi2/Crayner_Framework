<?php
defined('BASEURL') or define('BASEURL', 'http://localhost');

$cf = array(

/**
*		Router
*/
'router'=>'index.php',

    /**
    * Assets CSS and JS
    */
    'assets'=>array(
        'css'=>BASEURL.'/assets/css',
        'js'=>BASEURL.'/assets/js'
    ),

    /**
    *		Autoload
    */
    'autoload'=>array(
        'autoload_model'=>array(),
        'autoload_helper'=>array(),
    )
);
