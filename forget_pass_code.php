<?php
include("connect.php");

$phone = $_POST['phone'];
$s_ans = $_POST['s_ans'];
$pass = $_POST['new_pass'];
// Reset For Admin
$query = "SELECT * FROM tbladmin WHERE phone = '$phone'";
$result = mysqli_query($c,$query) or die ("Error in query:$query" . mysqli_error($c));

if(mysqli_num_rows($result)== 1){
 	$row=mysqli_fetch_assoc($result);
 	
 	$db_phone = $row['phone'];
    if($db_phone == $phone){
    
	    $db_sec_ans = $row['s_ans'];
	    if($db_sec_ans == $s_ans){
	        $query2 = "UPDATE tbladmin SET pass = '$pass' WHERE phone = '$phone';";
	        mysqli_query($c,$query2) or die ("Error in query: $query2" . mysqli_error($c));
	        
	        echo"<script>alert('Your password has been changed successful')</script>";
	        echo"<script>window.location.href='login.php'</script>";
	    
	    } else {
		    echo"<script>alert('Your old password is not correct')</script>";
		    echo"<script>window.location.href='forget_pass_form.php'</script>";
	    } 
    }else{
    echo"<script>alert('User not found. Please try again.')</script>";
    echo"<script>window.location.href='forget_pass_form.php'</script>";
    }
}
// Reset For Owner
$query = "SELECT * FROM tblowner WHERE phone = '$phone'";
$result = mysqli_query($c,$query) or die ("Error in query:$query" . mysqli_error($c));

if(mysqli_num_rows($result)== 1){
 	$row=mysqli_fetch_assoc($result);
 	
 	$db_phone = $row['phone'];
    if($db_phone == $phone){
    
	    $db_sec_ans = $row['s_ans'];
	    if($db_sec_ans == $s_ans){
	        $query2 = "UPDATE tblowner SET pass = '$pass' WHERE phone = '$phone';";
	        mysqli_query($c,$query2) or die ("Error in query: $query2" . mysqli_error($c));
	        
	        echo"<script>alert('Your password has been changed successful')</script>";
	        echo"<script>window.location.href='login.php'</script>";
	    
	    } else {
		    echo"<script>alert('Your old password is not correct')</script>";
		    echo"<script>window.location.href='forget_pass_form.php'</script>";
	    } 
    }else{
    echo"<script>alert('User not found. Please try again.')</script>";
    echo"<script>window.location.href='forget_pass_form.php'</script>";
    }
}

// Reset For Player
$query = "SELECT * FROM tblplayer WHERE phone = '$phone'";
$result = mysqli_query($c,$query) or die ("Error in query:$query" . mysqli_error($c));

if(mysqli_num_rows($result)== 1){
 	$row=mysqli_fetch_assoc($result);
 	
 	$db_phone = $row['phone'];
    if($db_phone == $phone){
    
	    $db_sec_ans = $row['s_ans'];
	    if($db_sec_ans == $s_ans){
	        $query2 = "UPDATE tblplayer SET pass = '$pass' WHERE phone = '$phone';";
	        mysqli_query($c,$query2) or die ("Error in query: $query2" . mysqli_error($c));
	        
	        echo"<script>alert('Your password has been changed successful')</script>";
	        echo"<script>window.location.href='login.php'</script>";
	    
	    } else {
		    echo"<script>alert('Your Security Answer is not correct')</script>";
		    echo"<script>window.location.href='forget_pass_form.php'</script>";
	    } 
    }else{
    echo"<script>alert('User not found. Please try again.')</script>";
    echo"<script>window.location.href='forget_pass_form.php'</script>";
    }
}


?>