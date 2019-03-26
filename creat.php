<?php 
include 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Article</title>
</head>
<body style="background : url(a.jpg)" width="100px">
<center>
	<br><br>
 	<form method="POST" action="actioncreat.php">
	<table>
	<tr>
 		<td><input type="hidden" name="waktu"></td>
	</tr>
	<tr>
 		<td>Hari</td>
		<td>:<input type="text" name="hari" placeholder="hari"></td>
	</tr>
	<tr>
		<td>Film</td>
		<td>:<textarea type="text" name="film" placeholder="film"></textarea></td>
	</tr>
	<tr>
		<td>Jam Tayang</td>
		<td>:<input type="text" name="tayang" placeholder="Jam"></td>
	</tr>
	</table>
	<tr>
		<br><td><input type="submit" name="submit"></td>
	</tr>
 	</form>
	</center>
</body>
</html>