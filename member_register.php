<?php
	include('connection.php');

	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$uname = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$cnfpassword = $_POST['cnfpassword'];
	$check=true;
if ($password==$cnfpassword)
{
	if (!preg_match("/^[a-zA-Z ]*$/",$fname))
	{
        $check=false;
        echo "<script>
        alert('Only letters allowed in field first name');
        window.location.href='signup.php';
        </script>";
    }
  	if (!preg_match("/^[a-zA-Z ]*$/",$lname))
 	{
	    $check=false;
	    echo "<script>
	    alert('Only letters allowed in field last name');
	    window.location.href='signup.php';
	    </script>";
  	}
  	if (!preg_match("/^[0-9]*$/",$mobile))
  	{
	    $check=false;
	    echo "<script>
	    alert('**Only Numbers allowed in Mobile number**');
	    window.location.href='signup.php';
	    </script>";
  	}
  	if($check)
	{
		$insert = $connection->query("INSERT INTO user(first_name, last_name, username, email, mobile, password) VALUES('$fname', '$lname', '$uname', '$email', '$mobile', '$password' )");
		if($insert)
		{
			header('location:success.php');
		}
		else
		{
	    echo "<script>
	    alert('Not inserted');
	    window.location.href='signup.php';
	    </script>";
		}
	}
}
else
{
	echo "<script>
    alert('Paasword do not match');
    window.location.href='signup.php';
    </script>";
}
?>
