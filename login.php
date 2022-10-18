<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/sites.css" rel="stylesheet" type="text/css">
<script>
function doFocus(){
	var set = document.flogin;
	set.username.focus();
}

function cekSubmit(){
	var set = document.flogin;
	if(set.username.value==''){
		alert('username tidak boleh kosong...');
		set.username.focus();
		return false;
	}
	if(set.userpass.value==''){
		alert('password tidak boleh kosong');
		set.userpass.focus();
		return false;
	}
	return true;
}
</script>		
<style type="text/css">
<!--
.style2 {color: #FFFF00}
.style3 {color: #0000FF}
-->

</style>
</head>
<body onLoad="doFocus()">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<link href="css/sites.css" rel="stylesheet" type="text/css" />

<script>
$(document).ready(function(){
	$('#login-box').center();
});
</script>


<span class="style3"></span><span class="style2"></span>

</head>
<body>
<div id="login-box">

<form id="flogin" name="flogin" method="post" action="script.php?page=login&action=submit">
<table align="center">
  <tr>
    <td colspan="5" align="center"><h2>Login</h2></td>
    </tr>
  <tr>
    <td rowspan="3"><img src="css/logo.png" width="128" height="128" /></td>
    <td>Username</td>
    <td>:</td>
    <td>
      <input name="txtuser" type="text" id="txtuser" size="30" maxlength="30" >

	  
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td>
      <input name="userpass" type="password" id="userpass" size="20" maxlength="20" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input name="button" type="submit" class="btn btn-danger" id="button" value="Login" />
	   <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='login.php'">
    </td>
	
  </tr>
</table>
</form>
</div>
	<script src="themes/js/jquery-1.8.3.min.js"></script>
</body>
</html>


