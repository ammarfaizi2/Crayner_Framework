<?php
require 'loader.php';
require 'Config/Config.php';
$a = new System\URI_Segment();
$b = new System\Action_Handler($a->gs());
$b->run();