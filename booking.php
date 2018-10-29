<?php
  session_start();
  $movie_name = $_GET['movie'];
  $_SESSION['movie'] = $movie_name;
  echo $_SESSION['movie'];
  if (isset($_SESSION['username']) && !empty($_SESSION['username']) ) {
   // echo "Welcome ".$_SESSION['username'];
   }
   else {
     ?>
     <script type="text/javascript">
     alert("Please Login to continue. You'll be redirected to login page");
     window.location.href = 'index.php';
     </script>
    <?php }  ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MovieTickets | Booking</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
  <body>
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="material-icons" style="font-size: 45px;">movie_filter</i>MovieTickets.in</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">My Bookings</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">My Bookings</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <h3 class="header center orange-text">Book Tickets of <?php echo $movie_name;?></h3>
    <!-- Form -->
    <div class="container">
      <div class="row">
        <br>
        <form class="col s12" action="ticket_booking.php" method="post">
          <div class="row">
            <div class="col s3"></div>
            <div class="input-field col s6">
              <input  id="name" name="name" type="text" class="validate" required>
              <label for="name">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="col s3"></div>
            <div class="input-field col s6">
              <input id="cnum" name="bnumber" type="text" class="validate" maxlength="10" required>
              <label for="cnum">Contact Number</label>
            </div>
          </div>
          <div class="row">
            <div class="col s3"></div>
            <div class="input-field col s3">
              <input id="ntickets" type="number" name="ntickets" class="validate">
              <label for="ntickets">Number of tickets</label>
            </div>
            <div class="input-field col s3">
              <select name="time">
                <option value="" disabled selected>Select time slot</option>
                <option>12:00-15:00</option>
                <option>16:00-19:00</option>
                <option>21:00-00:00</option>
              </select>
              <label>Time slot</label>
            </div>
          </div>
          <div class="row">
            <div class="col s3"></div>
            <div class="col s6">
              <label>Date</label>
              <input type="date" name="date" required>
            </div>
          </div>
          <div class="row">
            <div class="col s12" align="center">
              <button class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<?php
include 'footer.php';
?>
