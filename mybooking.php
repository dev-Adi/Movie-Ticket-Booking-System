<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>My Bookings</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  </head>
  <body>
    <!-- navbar -->
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="home.php" class="brand-logo"><i class="material-icons" style="font-size: 45px;">movie_filter</i>MovieTickets.in</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="logout.php">Logout</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </body>
</html>

<?php
    include 'connection.php';
    session_start();
    $user = $_SESSION['username'];

    if (isset($_SESSION['username']) && !empty($_SESSION['username']) ) {
     echo "";
     }
     else {
       ?>
       <script type="text/javascript">
       alert("Please Login to continue. You'll be redirected to login page");
       window.location.href = 'index.php';
       </script>
       <?php
     }

    $q1="SELECT * FROM booking where uname='$user'";
    $result = $connection->query($q1);
    $n=1;
    if ($result->num_rows > 0) {
      ?>
      <div class="container">
        <div class="row"></div>
        <div class="row"></div>
        <?php
        while($row=$result->fetch_assoc()) {
        // echo $n .". Ticket holder name: " . $row['name'] . " ~~Contact no. : " . $row['cnumber'] . " ~~No. of tickets: " . $row['tnum'] . " ~~ Show date: " . $row['date'] . "<br>";
          // echo $n;
          ?>
          <div style="margin-top: 50px;">
          </div>
          <div class="row">
            <h5 class="orange-text">Ticket holder's name:
            <b><?php echo $row['name']; ?></b>
          </h5>
          <h6 class="orange-text">Name of movie:
          <b><?php echo $row['movie_name']; ?></b>
        </h6>
        <h6 class="orange-text">Number of tickets booked:
        <b><?php echo $row['tnum']; ?></b>
        </h6>
        <h6 class="orange-text">Show time:
        <b><?php echo $row['time']; ?></b>
        </h6>
        <h6 class="orange-text">Date:
        <b><?php echo $row['date']; ?></b>
        </h6>
          </div>
          <?php
        }?>
      </div>
      <div style="margin-bottom: 375px;"></div>
      <?php
    }
    include 'footer.php';
 ?>
  </body>
</html>
