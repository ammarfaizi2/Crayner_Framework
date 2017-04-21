<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-height">
<style>
.fcg{
	border:2px solid black;
	width:55%;
	margin:5%;
	margin-top:15%;
}
.incg{
	margin:5%;
}
.in{
	margin-top:4%;
	margin-bottom:2%;
}
.lgb{
	margin-top:5%;
}
</style>
</head>
<body>
<center>
<div class="fcg">
<form method="post" action="<?php print BASEURL.$_SERVER['PHP_SELF'];?>">
<div class="incg">
<div class="in">
<label>Username</label><br>
<input type="text" name="username">
</div>
<div class="in">
<label>Password</label><br>
<input type="password" name="password">
</div>
<div class="lgb">
<input type="submit" name="login" value="Login">
</div>
<input type="hidden" name="token" value="<?php print $token['token'];?>">
<input type="hidden" name="vi" value="<?php print $token['vi'];?>">
</div>
</form>
</div>
</center>
</body>
</html>