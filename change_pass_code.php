<?php
include("connect.php");

$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];

session_start();
$phone = $_SESSION['phone'];
// Change password for admin
$q = "select * from tbladmin where phone = '$phone'";
$r = mysqli_query($c,$q) or die ("Error in query:$q" . mysqli_error($c));

if(mysqli_num_rows($r)== 1){
 	$row=mysqli_fetch_assoc($r);
    $db_pass = $row['pass'];
    if($db_pass == $old_pass){
		$q2 = "update tbladmin set pass = '$new_pass' where phone = '$phone'";        
		mysqli_query($c,$q2) or die ("Error in query: $q2" . mysqli_error($c));
        // Alert user to changed successful.
		echo"<script>alert('Your password has been changed successful')</script>";
		echo"<script>window.location.href='admin.php'</script>"; //Redirects the user with JavaScript

    } else {
        // Alert user to old password is not correct!.
		echo"<script>alert('Your old password is not correct!')</script>";
		echo"<script>window.location.href='change_pass_form.php'</script>"; //Redirects the user with JavaScript

    }
}
// Change password for Owner
$q = "select * from tblowner where phone = '$phone'";
$r = mysqli_query($c,$q) or die ("Error in query:$q" . mysqli_error($c));

if(mysqli_num_rows($r)== 1){
 	$row=mysqli_fetch_assoc($r);
    $db_pass = $row['pass'];
    if($db_pass == $old_pass){
		$q2 = "update tblowner set pass = '$new_pass' where phone = '$phone'";        
		mysqli_query($c,$q2) or die ("Error in query: $q2" . mysqli_error($c));
        // Alert user to changed successful.
		echo"<script>alert('Your password has been changed successful')</script>";
		echo"<script>window.location.href='owner.php'</script>"; //Redirects the user with JavaScript

    } else {
        // Alert user to old password is not correct!.
		echo"<script>alert('Your old password is not correct!')</script>";
		echo"<script>window.location.href='change_pass_form.php'</script>"; //Redirects the user with JavaScript

    }
}
// Change password for Player
$q = "select * from tblplayer where phone = '$phone'";
$r = mysqli_query($c,$q) or die ("Error in query:$q" . mysqli_error($c));

if(mysqli_num_rows($r)== 1){
 	$row=mysqli_fetch_assoc($r);
    $db_pass = $row['pass'];
    if($db_pass == $old_pass){
		$q2 = "update tblplayer set pass = '$new_pass' where phone = '$phone'";        
		mysqli_query($c,$q2) or die ("Error in query: $q2" . mysqli_error($c));
        // Alert user to changed successful.
		echo"<script>alert('Your password has been changed successful')</script>";
		echo"<script>window.location.href='plyer.php'</script>"; //Redirects the user with JavaScript

    } else {
        // Alert user to old password is not correct!.
		echo"<script>alert('Your old password is not correct!')</script>";
		echo"<script>window.location.href='change_pass_form.php'</script>"; //Redirects the user with JavaScript

    }
}
?>