<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Update Playground Code</title>
</head>

<body>
<?php
// establish connection
include('connect.php');

// establish connection to get the owner id (oid)
session_start();
$oid= $_SESSION['oid'];

// receive data from the form
$plno=$_POST['plno'];
$name= $_POST['name'];
$phone= $_POST['phone'];
$price= $_POST['price'];
$location= $_POST['location'];

// update data into the database
$q= "update tblplayground set name='$name',phone='$phone',price='$price',location='$location' where plno='$plno' ";
mysqli_query($c,$q)or die('Error in quiry: $q '.mysqli_error($c));

// Redirect the user to error alert 
echo"<script>alert('Your playground details were updated successfully.')</script>";
echo"<script>window.location.href='view_owner_playground.php'</script>"; //Redirects the user with JavaScript


?>
</body>

</html>
