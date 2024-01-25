<?php
require_once('check_player.php');
include("connect.php");
include("mylib.php");
$errors = [];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$s_q = $_POST['s_q'];
$s_ans = $_POST['s_ans'];

if (!preg_match("/^[A-Za-z\s]{3,20}$/", $name)) {
	$errors[] = "Customer name include capital, small and space, length between 3 , 20.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = "Enter valid Email Address";
}

if (!preg_match("/^(7|9)[0-9]{7}$/", $phone)) {
	$errors[] = "Enter valid Phone Number.";
}

if (count($errors) == 0) {
	$q = "select * from tblcustomer where uid = '$uid'";
	$r = mysqli_query($c, $q) or die("Error in query:$q" . mysqli_error($c));
	$r_num = mysqli_num_rows($r);
	if ($r_num == 0) {
		// Redirect the user to error alert 
		echo "<script>alert('can not found the user.')</script>";
		echo "<script>window.location.href='update_profile_player.php'</script>"; //Redirects the user with JavaScript

	} else {
		$q = "update tblcustomer set name='$name', email='$email', phone='$phone' where uid = '$uid'";
		mysqli_query($c, $q) or die("Error in query: $q" . mysqli_error($c));

		$q2 = "update tbluser set phone='$phone', s_q='$s_q', s_ans='$s_ans' where uid = '$uid'";
		mysqli_query($c, $q2) or die("Error in query: $q2" . mysqli_error($c));
		// Redirect the user to error alert 
		echo "<script>alert('Your profile has been updated successfully.')</script>";
		echo "<script>window.location.href='player.php'</script>"; //Redirects the user with JavaScript
	}
} else {
	DisplayErrors();
}
