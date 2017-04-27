<?php
/**
*
* 
*
*/

require 'loader.php';
require 'Config/Config.php';
(new System\Action_Handler((new System\URI_Segment())->gs()))->run();