<?php
     session_start();
     if( isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
           header('Location: gra.php');
           exit(); //opuszczamy plik, inaczej poniższa część strony również zostanie przetworzona!
     }
?>

<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Baza Wydajności Sprzętu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
				font-family: 'Russo One', sans-serif;
				background: url("bg.jpg") no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
	</style>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container" style="height: 100%">
	<nav class="col-md-12 text-center">
		<h1>Baza Wydajności Sprzętu</h1>
		<h3> PLK S.A.</h3>
	</nav>

	<div class="row" style="margin-top: 20%; height: 400px">
		<div class="col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 centLog">
			<div class="col-md-6 text-right hidden-xs hidden-sm">
				Login: <br /> <br /></p>
				Password:

			</div>
			<div class="col-md-6">
				<form action="zaloguj.php" method="post">
				<p class="hidden-md hidden-lg" style="color: white;">Login:</p>
				<input style="width:100%" type="text" name="login"> <br /><br />
				<p class="hidden-md hidden-lg" style="color: white;">Password:</p>
				<input style="width:100%" type="password" name="haslo"> <br /><br />
				<button style="width:100%" type="submit">Login</button>
				</form>
			</div>
      <?php

           if(isset($_SESSION['blad'])) {
             echo $_SESSION['blad'];
           }
      ?>
		</div>
	</div>
</div>



</body>
</html>
