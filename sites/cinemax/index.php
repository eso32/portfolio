 <!DOCTYPE html5>
 <html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CinemaX</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!--[if lt IE 9]>
     <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <header>
    <div class="container"><img src="img/logo.svg" /></div>
  </header>

  <section class="container">
    <div class="sala">
      <p>Hall B: Pulp Fiction 7:30pm</p>
      <div id="ekran">SCREEN</div>
      <div id="places">
        <!-- PLACE FOR GENERATED SEATS -->
      </div>

  </div>
  </section>
  <div class="orderPane">
  <div class="sticker">
    ORDER
  </div>
    <h2>Order Details</h2>
    <hr />
  <div class="orders">

  </div>
  <input id="confirm" type="button" value="Order tickets" />
  </div>


  <div class="confirmation"></div>
  <div class="form">
    <div><h1>Confirm order:</h1>
      <div>
        <div class="col-xs-4 text">
          Full name:
        </div>
        <div class="col-xs-8">
          <input type="text" id="name" />
        </div>

        <div class="col-xs-4 text">
          Phone:
        </div>
        <div class="col-xs-8">
          <input type="text" id="phone" />
        </div>

        <div class="col-xs-4 text">
          e-mail:
        </div>
        <div class="col-xs-8">
          <input type="text" id="mail" />
        </div>
      <input id="btnLast" class="col-xs-12" type="button" value="Book now" />
      </div>
    </div>
  </div>
  <div id="alertBox">
    You haven't picked any tickets!<br />
    Select free seats and click green label ORDER on the left hand side.
  </div>

  <!-- VENDOR SCRIPTS -->
  <script src="js/jquery-3.2.1.min.js"></script>

  <!-- APP SCRIPTS -->
  <script src="js/app.js"></script>

</body>
</html>
