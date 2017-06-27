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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
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
		  <li><a href="add.php">Dodaj pozycję</a></li>
		  <li class="active"><a href="#">Przeglądaj bazę</a></li>
		  <li><a href="info.php">Informacje</a></li>
		</ul>

		<form action="/action_page.php" method="get">

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
				<input class="fo btn" onclick="" name="searchBtn" value="Szukaj">
			</div>
			<div class="hidden-sm hidden-md hidden-lg col-xs-12">
				<input class="fo" type="reset" name="clearBtn" value="Wyczyść!">
			</div>
		</div>
		</form>
	</div>
	<div class="container">
		<div id="html1">
		  <ul>
		    <li>Prace przygotowawcze
		      <ul>
		        <li data-jstree='{"icon":"glyphicon glyphicon-file"}'>Karczowanie krzewów</li>
		        <li data-jstree='{"icon":"glyphicon glyphicon-file"}'>Plantowanie terenu</li>
		      </ul>
		    </li>
		    <li>Roboty ziemne
		      <ul>
		        <li>Wykonanie wykopów</li>
		        <li>Budowa podtorza</li>
		      </ul>
		    </li>
		    <li>Roboty torowe
		      <ul>
		        <li>Wykonanie wykopów</li>
		        <li>Budowa podtorza</li>
		        <li data-jstree='{"icon":"glyphicon glyphicon-file"}'><a href="1.html">Zgrzewanie torów</a></li>
		      </ul>
		    </li>
		    <li>SRK
		      <ul>
		        <li>Wykonanie wykopów</li>
		        <li>Budowa podtorza</li>
		      </ul>
		    </li>
		    <li>Roboty trakcyjne
		      <ul>
		        <li>Wykonanie wykopów</li>
		        <li>Budowa podtorza</li>
		      </ul>
		    </li>
		  </ul>
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

	$(function () { $('#html1').jstree(); });

	$('#html1').on("changed.jstree", function (e, data) {
	  console.log(data.selected);
	});
})
</script>
</body>
</html>
