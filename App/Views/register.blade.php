<?php
if(isset($_COOKIE['alert'])){
	$al = $_COOKIE['alert'];
	setcookie('alert',null,0);
}
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
<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="name"></td></tr>
<tr><td>E-Mail</td><td>:</td><td><input type="email" name="email"></td></tr>
<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="birthloc"></td></tr>
<tr><td>Tanggal Lahir</td><td>:</td><td>
<select name="tgl">
<option value=""></option>
<?php
for($i=1;$i<=31;$i++){
	?><option value="<?php print $i;?>"><?php print $i;?></option><?php
}?>
</select>
<select name="bln">
<option value=""></option><?php
$a = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
for($i=1;$i<=12;$i++){
	?><option value="<?php print (strlen($i)===1?'0':'').$i;?>"><?php print $a[$i];?></option><?php
}?></select>
<select name="thn">
<option value=""></option>
<?php
foreach(range((int)date("Y"),1980) as $b){
	?><option value="<?php print $b;?>"><?php print $b;?></option><?php }?></select></tr>
<tr><td>Alamat</td><td>:</td><td><textarea></textarea></td></tr>
<tr><td>Agama</td><td>:</td><td>
<select name="religion">
<option value=""></option>
<?php
$a = array("Islam","Kristen","Katolik","Hindu","Budha","Konghucu","Lainnya");
foreach($a as $a){
	print '<option value="'.$a.'">'.$a.'</option>';
}?></select></td></tr>
<tr><td>Nomor HP</td><td>:</td><td><input type="text" name="phone"></td></tr>
</tbody>
<thead>
<tr><th colspan="3" align="center"><h3>Buat Akun</h3></th></tr>
</thead>
<tbody>
<tr><td>Username</td><td>:</td><td><input type="text" name="username"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password"></td></tr>
<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="cpassword"></td></tr>
</tbody>
<tfoot>
<tr><th colspan="3" align="center"><div class="sb"><input type="submit" name="register"></div></th></tr>
</tfoot>
</table>
</form>
</div>
</center>
</body>
</html>