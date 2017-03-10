<?php
require("class/Crayner_Machine.php");
ini_set("max_execution_time",false); 
ignore_user_abort(true);
header('content-type:text/plain');
require("class/Telegram.php");
require("class/AI.php");	
$z=new Telegram("348646582:AAFJoLLmDhpToduqBIYLTE9TbJjZslzMmOg");
$count=0;
do{$c=array();
$z->clear();
$aa=$z->getUpdates();
foreach($aa as $b){
	print_r($b);
isset(
	$b['update_id'],
	$b['message']['text'],
	$b['message']['from']['first_name'],
	$b['message']['chat']['id'],
	$b['message']['chat']['type']
	) AND $c=array(
	$b['update_id'],
	$b['message']['text'],
	$b['message']['from']['first_name'].(isset($b['message']['from']['last_name'])?" ".$b['message']['from']['last_name']:" "),
	$b['message']['chat']['id'],
	$b['message']['chat']['type']);
	if(isset($c) AND check($c[0])){
		save($c[0]);
		if(strpos($c[1],"<?php")!==false) {
			$c[4]=="private" AND $c[3]!="243692601" AND $z->sendMessage($c[2],"Error : chat environtment not supported !") OR
			$z->sendMessage($c[2]."\n".Crayner_Machine::php("qq.php",str_replace("<?php","",$c[1])),$c[3]); 
		} else {
			$a=new AI();
			$d=$a->prepare($c[1]);
			if($d->execute($c[2])){
				$_t=$d->fetch_reply();
				is_array($_t) AND $z->sendPhoto($_t[1],$c[3],$_t[2]) OR $z->sendMessage($_t,$c[3]);
			}
		}
	}
}
if(isset($act))
var_dump($act);
$count++;
flush();unset($c);
}while($count<=30);
echo isset($b)?json_encode($b):null;
$ct=file_exists("counter.txt")?(file_get_contents("counter.txt")):0 XOR file_put_contents("counter.txt",(++$ct>=1000?0:$ct));
file_exists("error_log") AND unlink("error_log");$z->clear();
function clear_sv(){
	if(is_dir("cht_saver")){
		foreach(scandir("cht_saver") as $q) $q!=".." AND $q!="." AND  unlink("cht_saver/".$q);
	}
}
function check($a,$b=null){
	return !file_exists("cht_saver/".md5($a.$b));
}
function save($a,$b=null){
	is_dir("cht_saver") OR mkdir("cht_saver");
	return file_put_contents("cht_saver/".md5($a.$b)," ");
}