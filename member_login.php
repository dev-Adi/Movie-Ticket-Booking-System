<h2 style="color:red;"><?php

  include("connection.php");
  session_start();

  $user=$_POST['username'];
  $pass=$_POST['pass'];

  $query = "SELECT * FROM `user` WHERE username='$user' and password='$pass'";
  $result = mysqli_query($connection, $query) or die(mysql_error());
  $count = mysqli_num_rows($result);
  if ($count == 1) {
    $_SESSION['username'] = $user;
  }
  else {
  echo "Incorrect username or password. ";
  ?>
  <script type="text/javascript">
  alert("Invalid credentials. Please try again.");
  window.location.href = 'index.php';
  </script>

  <?php
  }
  if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    // echo "Hello " . $user . "";
    // session_start();
    header('location:home.php');
  }
?></h2>
