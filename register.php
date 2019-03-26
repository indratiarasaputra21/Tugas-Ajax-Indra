<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location : admin.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<center>
<body style="background : url(a.jpg)" width="100px">
 <div>
 	<b>Login</b> <br><br>
 	<form method="POST" action="actionlogin.php">
	<table>
	<tr>
 		<td>Username</td>
		<td>:<input type="text" name="username" placeholder="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:<input type="password" name="password" placeholder="password"></td>
	</tr>
	</table>
	<tr>
		<br><td><input type="submit" name="masuk"></td>
	</tr>
 	</form>
	<tr>
 		 <td><h3>Mau Membuat Akun?</h3> <button><a href="formregister.php"> Sign Up</a></button></td>
	</tr>
	
</div>
</center>
</body>
</html>