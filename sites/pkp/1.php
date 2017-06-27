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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
		  <li><a href="index.html">Wyszukiwanie</a></li>
		  <li><a href="add.html">Dodaj pozycję</a></li>
		  <li><a href="inspect.html">Przeglądaj bazę</a></li>
		  <li><a href="info.html">Informacje</a></li>
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
				<input class="fo btn" type="submit" onclick="" name="searchBtn" value="Szukaj">
			</div>
			<div class="hidden-sm hidden-md hidden-lg col-xs-12">
				<input class="fo" type="reset" name="clearBtn" value="Wyczyść!">
			</div>
		</div>
		</form>
	</div>
	<div class="container shadow">
	<div class="row">
		<h1>Zgrzewanie Toru</h1>

		<p class="col-sm-6 text-justify">Opis robót: Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker </p>

		<div class="col-sm-6">
			<canvas id="myChart"></canvas>
		</div>
	</div>
	<div class="row">
		<iframe class="col-sm-3" frameborder="0" border="0" cellspacing="0"
		src="https://www.youtube.com/embed/4J4dtWlOZu0">
		</iframe>
		<figure class="col-sm-3"><img src="1-2.jpg" /></figure>
		<figure class="col-sm-3"><img src="1-3.jpg" /></figure>
		<figure class="col-sm-3"><img src="1-1.jpg" /></figure>
	</div>
	<div class="row">
	<h3>Zgłoszone wydajności</h3>
	<div class="table-responsive" style="margin-bottom: 20px;">
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
		        <td><a href="1.html">Zgrzewanie toru</a></td>
		        <td>Roboty torowe</td>
		        <td>14 zgrzewów/dzień</td>
		        <td>Piotr Kowalski</td>
		        <td>16-03-2017</td>
		      </tr>

		    	<tr>
		      	<td class="edit"><a href="add.html"><span class="glyphicon "></span></a></td>
		        <td>2</td>
		        <td><a href="1.html">Zgrzewanie toru</a></td>
		        <td>Roboty torowe</td>
		        <td>12 zgrzewów/dzień</td>
		        <td>Jan Nowak</td>
		        <td>11-02-2017</td>
		      </tr>
		      </tbody>
		   </table>
	</div>
	</div>
<script>
      var canvas = document.getElementById("myChart");

      var data = {
    labels: ["I", "II", "III", "IV", "V", "VI", "VII"],
    datasets: [
        {
            label: "Trudne warunki",
            fill: false,
            lineTension: 0.5,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,100,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40],

        },
        {
            label: "Dobre warunki",
            fill: true,
            lineTension: 0.5,
            backgroundColor: "rgba(244,167,66,0.4)",
            borderColor: "rgba(244,167,66,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(244,100,66,1)",
            pointBackgroundColor: "#000",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(0,192,192,1)",
            pointHoverBorderColor: "rgba(120,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [20, 32, 12, 54, 66, 8, 90],

        }
       ]
      };

      var myLineChart = Chart.Line(canvas, {
        data:data,
        options: {
		        title: {
		            display: true,
		            text: 'Wydajność dzienna robót'
	        		}
	        	}

      })

      //var myFirstChart = new Chart(chrt).Bar(data);
        </script>

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
