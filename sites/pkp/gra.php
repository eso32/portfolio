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
		  <li class="active"><a href="#">Wyszukiwanie</a></li>
		  <li><a href="add.php">Dodaj pozycję</a></li>
		  <li><a href="inspect.php">Przeglądaj bazę</a></li>
		  <li><a href="info.php">Informacje</a></li>
		</ul>

		<form action="/action_page.php" method="get">

		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Wyszukaj: </label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input class="fo" type="text" name="search"> <br />
			</div>
			<div class="col-sm-2 hidden-xs">
				<input class="fo btn" type="reset" name="clearBtn" value="Wyczyść!">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label>Kategoria robót:</label>
			</div>
			<div class="col-sm-3 col-xs-12">
				<select class="fo" name="category">
					<option>Wszędzie</option>
					<option>Prace przygotowawcze</option>
					<option>Roboty ziemne</option>
					<option>Roboty torowe</option>
					<option>SRK</option>
					<option>Trakcja</option>
				</select>
			</div>
			<div class="col-sm-2 col-xs-12">
				<input class="fo btn" name="searchBtn" value="Szukaj">
			</div>
			<div class="hidden-sm hidden-md hidden-lg col-xs-12">
				<input class="fo" type="reset" name="clearBtn" value="Wyczyść!">
			</div>
		</div>
		</form>
	</div>
	<div class="container">

		<div class="table-responsive">
		  <table class="table">
		    <thead>
		      <tr>
		      	<th></th>
		        <th>#</th>
		        <th>Zadanie</th>
		        <th>Kategoria</th>
		        <th>Wydajność</th>
		        <th>Autor</th>
		        <th>Data</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      	<td class="edit"><a href="add.html"><span class="glyphicon "></span></a></td>
		        <td>1</td>
		        <td><a href="1.php">Zgrzewanie toru</a></td>
		        <td>Roboty torowe</td>
		        <td>14 zgrzewów/dzień</td>
		        <td>Tomasz Szłapa</td>
		        <td>16-03-2017</td>
		      </tr>
		      <tr>
		      	<td class="edit"><a href="add.html"><span class="glyphicon "></span></a></td>
		        <td>2</td>
		        <td>Budowa podtorza wze wzmocnieniem</a></td>
		        <td>Roboty ziemne</td>
		        <td>70 mb/dzień</td>
		        <td>Tomasz Szłapa</td>
		        <td>15-03-2017</td>
		      </tr>
		      <tr>
		      	<td class="edit"><a href="add.html"><span class="glyphicon "></span></a></td>
		        <td>3</td>
		        <td>Warstwa ochronna esortu</a></td>
		        <td>Roboty ziemne</td>
		        <td>150 mb/dzień</td>
		        <td>Jan Kowalski</td>
		        <td>13-03-2017</td>
		      </tr>
		      <tr>
		        <td class="edit"><a href="add.html"><span class="glyphicon "></span></a></td>
		        <td>4</td>
		        <td>Subwarstwa tłuczna></td>
		        <td>Roboty ziemne</td>
		        <td>150 mb/dzień</td>
		        <td>Marcin Nowak</td>
		        <td>13-03-2017</td>
		      </tr>
		      <tr>
		      	<td class="edit"><a href="asd"><span class="glyphicon"></span></a></td>
		        <td>5</td>
		        <td>Warstwa ochronna esortu</a></td>
		        <td>Roboty ziemne</td>
		        <td>150 mb/dzień</td>
		        <td>Adam Pałąka</td>
		        <td>02-03-2017</td>
		      </tr>
		      <tr>
		      	<td class="edit"><a href="add.html"><span class="glyphicon "></span></a></td>
		        <td>6</td>
		        <td>Balastowanie toru</td>
		        <td>Roboty torowe</td>
		        <td>600 mb/dzień</td>
		        <td>Edward Czek</td>
		        <td>11-03-2017</td>
		      </tr>
		    </tbody>
		  </table>
		 </div>
	</div>
<script>
$(document).ready(function(){
	$('tr').mouseenter(function(){
		$(this).find("span").toggleClass("glyphicon-pencil");
	});
	$('tr').mouseleave(function(){
		$(this).find("span").toggleClass("glyphicon-pencil");
	});
})
</script>
</body>
</html>
