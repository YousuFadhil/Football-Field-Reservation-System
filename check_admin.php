<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>check admin</title>
</head>

<body>
<?php
session_start();
$phone = $_SESSION['phone'];
if(!isset($phone)){
// Redirect the user to error alert 
	echo"<script>alert('You can't access this page until your login.')</script>";
	echo"<script>window.location.href='authentication_error.php'</script>"; //Redirects the user with JavaScript
}
?>

</body>

</html>
