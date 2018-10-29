<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Login</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  </head>
  <body>
    <!-- navbar -->
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="material-icons" style="font-size: 45px;">movie_filter</i>MovieTickets.in</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="signup.php">Signup</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="signup.php">Signup</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <!-- form -->
    <div class="container">
      <div class="row">
        <div class="row" style="margin-top:100px;">
        </div>
      <form class="col s12" action="member_login.php" method="post">
        <div class="row">
          <div class="col s3"></div>
          <div class="input-field col s6">
            <input id="username" type="text" class="validate" name="username" required>
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="col s3"></div>
          <div class="input-field col s6">
            <input id="pass" type="password" class="validate" name="pass" required>
            <label for="pass">Password</label>
          </div>
        </div>
        <div class="row" align="center" style="margin-bottom: 120px;">
          <div class="col s12">
            <button class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="action">Login
              <i class="material-icons right">send</i>
            </button>
            <p>
              Not a member? No worries, Signup <a href="signup.php">here</a>
            </p>
          </div>
        </div>
        <div class="row"></div>
        <div class="row" style="margin-top: 40px;"></div>
      </form>
      </div>
    </div>


    <?php
      session_start();
      if (isset($_SESSION['username']) && !empty($_SESSION['username']) ) {
        ?>
        <script type="text/javascript">
        alert("You are already logged in");
        window.location.href = 'home.php';
        </script>
        <?php
       }
       else {
         echo "";

       }
      include('footer.php');
     ?>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
