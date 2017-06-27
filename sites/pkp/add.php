<?php
     session_start();

     if(!isset($_SESSION['zalogowany']))
     { //warto dokleić do każdej podstrony, jeśli user nie jest zalogowany to automat wrac do                                                                                                                         //index.php
         header('Location: index.php');
         exit();
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="col-sm-12 text-center">
		<h1>Baza Wydajności Sprzętu</h1>
	<?php
		echo '<p> Witaj ' . $_SESSION['user'] . '! [ <a href="logout.php">Wyloguj się</a> ]</p>';
	 ?>
	</nav>

	<div class="container bg">
		<ul class="nav nav-tabs">
		  <li><a href="index.php">Wyszukiwanie</a></li>
		  <li class="active"><a href="#">Dodaj pozycję</a></li>
		  <li><a href="inspect.php">Przeglądaj bazę</a></li>
		  <li><a href="info.php">Informacje</a></li>
		</ul>
		<form action="/action_page.php" method="get">
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Zadanie: </label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input class="fo" type="text" name="search" value=""> <br />
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Kategoria robót:</label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<select class="fo" name="category">
					<option></option>
					<option>Wszędzie</option>
					<option>Prace przygotowawcze</option>
					<option>Roboty ziemne</option>
					<option>Roboty torowe</option>
					<option>SRK</option>
					<option>Trakcja</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Wydajność: </label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input class="fo" type="text" name="search" value=""> <br />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Autor: </label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input class="fo" type="text" name="search" value=""> <br />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Data: </label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input class="fo" type="text" name="search" value=""> <br />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<input class="fo" onclick="" name="searchBtn" value="Dodaj">
			</div>
			<div class="col-sm-2 col-xs-12">
				<input class="fo" type="reset" name="clearBtn" value="Wyczyść">
			</div>
		</div>
		</form>
	</div>


</body>
</html>
