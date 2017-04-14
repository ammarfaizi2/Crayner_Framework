<?php # header("content-type:text/plain");?>
<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Anggota RedAngel</title>
<meta name="viewport" content="width=device-height
;">
</head>
<body>
<center>
<div>
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