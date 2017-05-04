<?php
use System\Config_Handler;

if (!function_exists('js')) {
    function js($file, $abs=false)
    {
        print '<script type="text/javascript" src="'.(Config_Handler::iq()->assets('js')).'/'.($abs?$file:$file.'.js').'">';
    }
}
if (!function_exists('css')) {
    function css($file, $abs=false)
    {
        print '<link rel="stylesheet" type="text/css" href="'.(Config_Handler::iq()->assets('css')).'/'.($abs?$file:$file.'.css').'">';
    }
}
