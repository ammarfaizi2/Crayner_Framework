<?php
require 'loader.php';
require 'Config/Config.php';
$a = new System\URI_Segment();
$a = new System\Action_Handler($a->gs());
$a->run();