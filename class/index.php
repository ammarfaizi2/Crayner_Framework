
<?php
// definisi fungsi
function eksekusi($nomor) {
   $nomor += 5;
}
// eksekusi
$nomor = 10;
eksekusi($nomor);
echo $nomor=+5;

exit();
#Quiz
#header('content-type:text/plain');
$email="ammarfaizi93@gmail.com";
$pass="triosemut123";
$ch = curl_init();
$op = array(
CURLOPT_URL=>"https://m.facebook.com/login.php",
CURLOPT_RETURNTRANSFER=>true,CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; rv:50.0) Gecko/20100101 Firefox/50.0",
CURLOPT_FOLLOWLOCATION=>true,
CURLOPT_SSL_VERIFYPEER=>false,
CURLOPT_CONNECTTIMEOUT=>30,
CURLOPT_TIMEOUT=>30);
curl_setopt_array($ch,$op);
$out=curl_exec($ch);
$q=curl_error($ch) AND exit($q);
curl_close($ch);
print $out;
$a=file_get_contents("aa",$out);
print $a;
exit();
$out=explode("Popular Games Right Now",$out,3);
$out=explode("Recently Reviewed",$out[1]);
$out=explode("game-card-name\">",$out[0]);
foreach($out as $q)
 $a=explode("<",$q) AND !empty($a[0]) AND $gn[]=html_entity_decode($a[0],ENT_QUOTES,'UTF-8') XOR $a=explode('<img class="img-responsive cover_uniform game-card-image cover_uniform cover_uniform" src="',$q) AND !empty($a[1]) AND $a=explode('"',$a[1]) AND !empty($a[0]) AND $gi[]=$a[0];
print "<center><h1>Game Terpopuler by Es Teh</h1>";
for($i=0;$i<count($gn);$i++)
isset($gi[$i],$gn[$i]) AND print "<img src=\"".$gi[$i]."\"><br>".$gn[$i]."<br><br><br>";

#phpcurl
#finish