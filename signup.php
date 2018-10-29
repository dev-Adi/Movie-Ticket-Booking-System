<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Register</title>

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
          <li><a href="index.php">Login</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="index.php">Login</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <!-- form -->
    <div class="row"></div>
    <div class="container ip-form">
      <div class="row">
      <form class="col s12" method="post" action="member_register.php">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" name="first_name" type="text" class="validate" required>
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" name="last_name" type="text" class="validate" required>
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate" maxlength="25" required>
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate" required>
            <label for="Email">Email</label>
          </div>
          <div class="input-field col s6">
            <input id="mobile" name="mobile" type="text" class="validate" maxlength="10" required>
            <label for="mobile">Mobile Number</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="password" name="password" type="password" class="validate" maxlength="20" required>
            <label for="password">Password</label>
          </div>
          <div class="input-field col s6">
            <input id="cnfpassword" name="cnfpassword" type="password" class="validate" maxlength="20" required>
            <label for="password">Confirm Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12" align="center">
            <button class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        </div>
      </form>
      <div class="row" style="margin-top:100px;"></div>
    </div>

    </div>
    <?php
      include 'footer.php';
     ?>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>


