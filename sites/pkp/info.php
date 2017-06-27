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
		  <li><a href="inspect.php">Przeglądaj bazę</a></li>
		  <li class="active"><a href="#">Informacje</a></li>
		</ul>

		<div class="row">
			<p class="text-center"><strong>Baza Wydajności Sprzętu</strong> została opracowana na podstwie doświadczeń pracowników PKP PLK S.A. zdobytych w trakcie nadzoru inwestycji budowlanych w latach 2012-2017.</p>
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
