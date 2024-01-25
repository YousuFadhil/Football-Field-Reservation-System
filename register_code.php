<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Register code</title>
</head>

<body>
	<?php
	$errors = [];
	include('connect.php');
	include('mylib.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$s_q = $_POST['s_q'];
	$s_ans = $_POST['s_ans'];

	if (!isset($_POST['type'])) {
		$errors[] = "Choose user type!";
	} else
		$type = $_POST['type'];
	// Validation

	if (!preg_match("/^[A-Za-z\s]{3,20}$/", $name)) {
		$errors[] = "Name include capital, small and space, length between 3 , 20.";
	}

	if (!preg_match("/^(7|9)[0-9]{7}$/", $phone)) {
		$errors[] = "Enter valid Phone Number.";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Enter valid Email Address";
	}

	if (empty($pass)) {
		$errors[] = "password should not be empty";
	}

	if ($s_q == 'x') {
		$errors[] = "Choose a security question";
	}

	if (empty($s_ans)) {
		$errors[] = "Security answer should not be empty";
	}


	if (count($errors) == 0) {
		//to insert data to user table
		$q = "insert into tbluser(phone,pass,type,s_q,s_ans)values('$phone','$pass','$type','$s_q','$s_ans')";
		mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));

		// Reach User ID
		$q2 = "select uid from tbluser where phone='$phone' and pass='$pass' and type='$type'";
		$r = mysqli_query($c, $q2) or die("Error in $q2" . mysqli_error($c));
		$row = mysqli_fetch_assoc($r);
		$uid = $row['uid'];

		// insert to customer table by User ID
		$q3 = "insert into tblcustomer(name,email,phone,uid)values('$name','$email','$phone', '$uid')";
		mysqli_query($c, $q3) or die("Error in $q3" . mysqli_error($c));


		// Alert user to success register and Redirect the user to login page.
		echo "<script>alert('Your account has been created successful')</script>";
		echo "<script>window.location.href='login.php'</script>"; //Redirects the user with JavaScript


	} else
		displayErrors();
	?>
</body>

</html>