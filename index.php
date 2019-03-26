<?php 
include 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	<form id="form-container" class="form-container">

    <title>CRUD</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
   <form id="form-container" class="form-container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
		  <ul class="nav navbar-nav">
              <li class="active"><a href="home.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="other.html">Other</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="collapse.html">Collapse</a></li>
                </ul>
              </li>
            </ul>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              
            </div>
            <div class="form-group">
             
            </div>
            <center>
       <div class="menu">
     
			<ul>
				
			<font color="white">
        <label for="input">NyempeneSearch :</label></font>
        <input type="text" id="input" value="">
        <button id="submit-btn">Submit</button>
					
			</ul>
			
		</div>
		</center>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	
    	</div>

<center>
  <br>
    <h2>Selamat Datang Di Bioskop Nyempene</h2>
  <br><br>
    <table align="center" width="700px" height="150px" border="1" cellpadding="10" cellspacing="0">
  <tr >
    <th><center>No</th>
    <th><center>Hari</th>
    <th><center>Film</th>
	<th><center>Jam Tayang</th>
    <th><center>Last Update</th>
    <th><center>Option</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><center><?= $i; ?></td>
    <td><center><?= $x["hari"]; ?></td>
    <td><center><?= $x["film"]; ?></td>
	<td><center><?= $x["tayang"];  ?></td>
    <td><center><?= $x["waktu"]; ?></td>
    <td><center>
      <a href="register.php">Ubah</a> | <a href="register.php">Hapus</a>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>
<li class="wikipedia-container">
    <h3 id="wikipedia-header">Selamat Datang Di Web Nyempene</h3>
    <ul id="wikipedia-links">Data Yang Anda Cari<ul>
</li>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
  <script src="jquery.min.js"></script>
	<script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
</html>
