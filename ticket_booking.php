<?php
  session_start();
  include 'connection.php';
  $nm=$_SESSION['username'];
  $movie_name=$_SESSION['movie'];
  $bname=$_POST['name'];
  $bnum=$_POST['bnumber'];
  $nticket=$_POST['ntickets'];
  $btime=$_POST['time'];
  $date=$_POST['date'];
  $insert="insert into booking values('".$movie_name."','".$nm."','".$bname."','".$bnum."','".$nticket."','".$btime."','".$date."')";
  if(mysqli_query($connection,$insert)) {
	   header("location:home.php");
   }
   else {
	    echo "Some error has occured";
    }

 ?>
