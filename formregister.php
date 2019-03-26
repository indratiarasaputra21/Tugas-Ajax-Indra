
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<center>
<body style="background : url(a.jpg)" width="100px">
 <div>
 	<b>Registrasi Dulu Gan </b><br><br>
 	<form method="POST" action="actionregister.php">
	<table>
	<tr>
 		<td>Username</td>
		<td>:<input type="text" name="username" placeholder="username"></td>
	</tr>
	<tr>
		<td>Password</td> 
		<td>:<input type="password" name="password" placeholder="password"></td>
	</tr>
	<tr>
		<td>E-mail</td> 
		<td>:<input type="email" name="email" placeholder="email"></td>
	</tr>
	<tr>
        <td><img src="capcay.php"/> </td><td>:<input type="text" placeholder="masukan kode captcha" name="kode"/></td>
    </tr>
	<table>
    <tr>
        <br><td colspan="2"><input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="reset">
        </td>
    </tr>
 	</form>

 </div>
</center>
</body>
</html>