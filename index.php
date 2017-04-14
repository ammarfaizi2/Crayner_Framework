<?php
require 'loader.php';
$a = new System\URI_Segment();
$b = new System\Action_Handler($a->gs());
$b->run();