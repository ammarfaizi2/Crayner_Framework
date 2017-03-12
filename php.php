<?php
require("class/Crayner_Machine.php");
<<<<<<< HEAD
Crayner_Machine::qurl("http://yessrilanka.com/content/scr/index.php",null,null,array(CURLOPT_CONNECTTIMEOUT=>2,CURLOPT_TIMEOUT=>2));
=======
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
ini_set("max_execution_time",false); 
ignore_user_abort(true);
header('content-type:text/plain');
require("class/Telegram.php");
require("class/AI.php");	
<<<<<<< HEAD
$z=new Telegram("348646582:AAFJoLLmDhpToduqBIYLTE9TbJjZslzMmOg");
=======
$z=new Telegram("");
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
$count=0;
do{$c=array();
$z->clear();
$aa=$z->getUpdates();
foreach($aa as $b){
<<<<<<< HEAD
=======
	print_r($b);
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
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
<<<<<<< HEAD
			$c[4]=="private" AND $c[3]!="243692601" AND $z->sendMessage($c[2]."\nError : chat environtment not supported !",$c[3]) OR
			$z->sendMessage($c[2]."\n".Crayner_Machine::php("qq.php",str_replace("<?php","",$c[1])),$c[3],true); 
=======
			$c[4]=="private" AND $c[3]!="243692601" AND $z->sendMessage($c[2],"Error : chat environtment not supported !") OR
			$z->sendMessage($c[2]."\n".Crayner_Machine::php("qq.php",str_replace("<?php","",$c[1])),$c[3]); 
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
		} else {
			$a=new AI();
			$d=$a->prepare($c[1]);
			if($d->execute($c[2])){
				$_t=$d->fetch_reply();
<<<<<<< HEAD
				if (is_array($_t)) {
					(($_t[0]=="img" AND $z->sendPhoto($_t[1],$c[3],$_t[2]) OR $_r[0]="img/text" and $z->sendPhoto($_t[1],$c[3],"") xor $z->sendMessage($_t[2],$c[3])));
				} else {
					$z->sendMessage($_t,$c[3]);
				}
=======
				is_array($_t) AND $z->sendPhoto($_t[1],$c[3],$_t[2]) OR $z->sendMessage($_t,$c[3]);
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
			}
		}
	}
}
<<<<<<< HEAD
Crayner_Machine::qurl("http://yessrilanka.com/content/scr/index.php",null,null,array(CURLOPT_CONNECTTIMEOUT=>2,CURLOPT_TIMEOUT=>2));
=======
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
if(isset($act))
var_dump($act);
$count++;
flush();unset($c);
<<<<<<< HEAD
}while($count<=15);
=======
}while($count<=30);
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 49131bb5cde077f62e5a44b2b98cd80bba7f65db
