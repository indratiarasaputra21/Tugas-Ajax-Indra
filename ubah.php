<?php 
	include 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "Data telah berhasil diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk melihat hasil";
		}
		else{
			echo "Data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
			echo " Gan";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit articel</title>
</head>
<body style="background : url(a.jpg)" width="100px">
<center>
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
	<table>
	<tr>
 		<td><input type="hidden" name="id" value="<?= $ubah["id"]?>"></td>
	</tr>
    <tr>
 		<td>Hari</td>
		<td>:<input name="hari" value="<?= $ubah["hari"]?>"></td>
	</tr>
	<tr>
		<td>Film</td>
		<td>:<textarea type="text" name="film" placeholder="Film" value="<?= $ubah["film"]?>"></textarea></td>
	</tr>
	<tr>
		<td>Jam Tayang</td>
		<td>:<input name="tayang"  value="<?= $ubah["tayang"]?>"></td>
	</tr>
	</table>
	<tr>
		,<br><td><input type="submit" name="submit"></td>
	</tr>
 	</form>
	</center>
</body>
</html>