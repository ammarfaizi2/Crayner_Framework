<?php
if(isset($_COOKIE['fr'])){
	$f = json_decode(teadecrypt($_COOKIE['fr']),true);
}
if(isset($_COOKIE['alert'])){
	$al = teadecrypt($_COOKIE['alert']);
	setcookie('alert',null,0);
}
function v($v)
{
	return 'value="'.$v.'"';
}
var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Anggota RedAngel</title>
<meta name="viewport" content="width=device-height
;">
<style>
body{
	font-family:Tahoma;
}
.sb{
	margin-top:5%;
}
.fcg{
	border:3px solid black;
	margin-top:8%;
	padding-bottom:4%;
	width:85%;
}
</style>
<?php print isset($al)?'<script>
alert("'.$al.'");
</script>':null;?>
</head>
<body>
<center>
<div class="fcg">
<form method="post" action="?ref=register">
<table>
<thead>
<tr><th colspan="3" align="center"><h2>Pendaftaran Anggota RedAngel</h2></th></tr>
</thead>
<tbody>
<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="name" <?php print isset($f['name'])?v($f['name']):'';?>></td></tr>
<tr><td>E-Mail</td><td>:</td><td><input type="email" name="email" <?php print isset($f['email'])?v($f['email']):'';?>></td></tr>
<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="birthloc" <?php print isset($f['birthloc'])?v($f['birthloc']):'';?>></td></tr>
<tr><td>Tanggal Lahir</td><td>:</td><td>
<select name="tgl">
<option value=""></option>
<?php
for($i=1;$i<=31;$i++){
	?><option value="<?php print $i;?>"<?php print isset($f['tgl'])&&$f['tgl']==$i?' selected':'';?>><?php print $i;?></option><?php
}?>
</select>
<select name="bln">
<option value=""></option><?php
$a = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
for($i=1;$i<=12;$i++){
	?><option value="<?php print (strlen($i)===1?'0':'').$i;?>"<?php print isset($f['bln'])&&(int)$f['bln']==$i?' selected':'';?>><?php print $a[$i];?></option><?php
}?></select>
<select name="thn">
<option value=""></option>
<?php
foreach(range((int)date("Y"),1980) as $b){
	?><option value="<?php print $b;?>"<?php print isset($f['thn'])&&$f['thn']==$b?' selected':'';?>><?php print $b;?></option><?php }?></select></tr>
<tr><td>Alamat</td><td>:</td><td><textarea name="address"><?php print isset($f['address'])?$f['address']:'';?></textarea></td></tr>
<tr><td>Agama</td><td>:</td><td>
<select name="religion">
<option value=""></option>
<?php
$a = array("Islam","Kristen","Katolik","Hindu","Budha","Konghucu","Lainnya");
foreach($a as $a){
	print '<option value="'.$a.'"'.(isset($f['religion'])&&$f['religion']==$a?' selected':'').'>'.$a.'</option>';
}?></select></td></tr>
<tr><td>Nomor HP</td><td>:</td><td><input type="text" name="phone" <?php print isset($f['phone'])?v($f['phone']):'';?>></td></tr>
</tbody>
<thead>
<tr><th colspan="3" align="center"><h3>Buat Akun</h3></th></tr>
</thead>
<tbody>
<tr><td>Username</td><td>:</td><td><input type="text" name="username" <?php print isset($f['username'])?v($f['username']):'';?>></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password"></td></tr>
<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="cpassword"></td></tr>
</tbody>
<tfoot>
<tr><th colspan="3" align="center"><div class="sb">
<input type="hidden" name="rtoken" value="<?php print $token;?>">
<input type="hidden" name="token_key" value="<?php print rstr(64);?>">
<input type="submit" name="register">
</div></th></tr>
</tfoot>
</table>
</form>
</div>
</center>
</body>
</html>