<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MovieTickets</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="material-icons" style="font-size: 45px;">movie_filter</i>MovieTickets.in</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="mybooking.php">My Bookings</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">My Bookings</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">
      <?php
      session_start();
        include('connection.php');
         if (isset($_SESSION['username']) && !empty($_SESSION['username']) ) {
          echo "Welcome ".$_SESSION['username'];
          }
          else {
            ?>
            <script type="text/javascript">
            alert("Please Login to continue. You'll be redirected to login page");
            window.location.href = 'index.php';
            </script>
            <?php
          }
        ?>
      </h1>

      <div class="row center"></div>
      <div class="row center">
        <a href="#movies" class="btn-large waves-effect waves-light orange">Book Now</a>
      </div>
      <br><br>

    </div>
  </div>


  <div id="movies">
    <div class="container">
      <div class="section">

          <!-- Movie cards -->
        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/rambo.jpg" style="height:350px;">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Text containing description about movie <br></p>
              </div>
              <div class="card-action">
                <!-- <a href="#">Book tickets</a> -->
                <a href="booking.php?movie=Rambo">Book Tickets</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/robot.jpg" style="height:350px;">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Text containing description about movie <br></p>
              </div>
              <div class="card-action">
                <a href="booking.php?movie=Robot-2.0">Book Tickets</a>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/manik.jpg" style="height:350px;">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Text containing description about movie <br></p>
              </div>
              <div class="card-action">
                <a href="booking.php?movie=Manikarnika">Book Tickets</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>

  <?php
    include('footer.php');
   ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
