<?php
/**
*
*		@author Ammar Faizi <ammarfaizi2@gmail.com>
*		@license RedAngel PHP Concept
*
*/
require __DIR__.'/App/Config/config.php';
spl_autoload_register(function ($class) {
    require __DIR__.'/'.str_replace('\\', '/', $class).'.php';
});
