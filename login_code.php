<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>login code</title>
	<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<?php
	$errors = [];
	include('connect.php');
	include('mylib.php');
	// Receive values from form
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];

	// query to get the data and run it 
	$q = "select * from tbluser where phone='$phone' and pass='$pass'";
	$r = mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));
	// Check for the validity of the entered phone and password 
	if (mysqli_num_rows($r) == 1) {
		$row = mysqli_fetch_assoc($r);
		$type = $row['type'];

		if ($type == 'A') {
			session_start();
			//Save data in session array
			$_SESSION['uid'] = $row['uid'];  // PK 
			// Redirect the user to page you want to deal with
			header("Location:admin.php");
		} elseif ($type == 'O') {
			session_start();
			//Save data in session array
			$_SESSION['uid'] = $row['uid'];   // PK 
			// Redirect the user to page you want to deal with
			header("Location:owner.php");
		} else {
			session_start();
			//Save data in session array
			$_SESSION['uid'] = $row['uid'];  // PK 
			// Redirect the user to page you want to deal with
			header("Location:player.php");
		}
	}

	// Redirect the user to error alert 
	echo "<script>alert('Your Username or Password is incorrect! Please try again')</script>";
	echo "<script>window.location.href='javascript:history.back()'</script>"; //Redirects the user with JavaScript

	?>
</body>

</html>