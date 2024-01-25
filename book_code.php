<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Book Code</title>
</head>

<body>

<?php
include('connect.php');
require_once('check_player.php');

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];

// query to get plno by using layground name
$q = "select * from tblplayground where name= '$name' ";
$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
while ($row= mysqli_fetch_assoc($r)) {
	$plno = $row['plno'];
}

// query to check if there is a record with the same (plno,date,time).
$q="select * from tblreservation where date='$date' and plno='$plno' and time='$time'";
$r=mysqli_query($c,$q) or die("Error in query:$q".mysqli_error($c)); 

if(mysqli_num_rows($r) <= 0){
	// If not found data match
	$q="insert into tblreservation (date,time,plno,uid) values('$date','$time', '$plno', '$uid')";
	$r=mysqli_query($c,$q) or die("Error in query:$q".mysqli_error($c));
	// Alert the user 
	echo"<script>alert('The booking has been done successfully.')</script>";
	echo"<script>window.location.href='player.php'</script>"; //Redirects the user with JavaScript


}else{
	// query to count down the number of rows with the same date.
	$q="select * from tblreservation where date='$date'";
	$r=mysqli_query($c,$q) or die("Error in query:$q".mysqli_error($c)); 
	$ctr =mysqli_num_rows($r);
	if($ctr>=4){
	// Alert the user 
	echo"<script>alert('All the time on the same date already choosing.')</script>";
	echo"<script>window.location.href='javascript:history.back()'</script>"; //Redirects the user with JavaScript with same data that selected befor
	}else{
		while($row= mysqli_fetch_assoc($r)){
		    $dbtime=$row['time'];
		    if ($dbtime == $time) {
			// Alert the user 
			echo"<script>alert('This time has already been chosen, try another.')</script>";
			echo"<script>window.location.href='javascript:history.back()'</script>"; //Redirects the user with JavaScript with same data that selected befor

		    }else{
		        //echo"defrent";
		        $q="update tblreservation set time= '$time' where date='$date'";
		        $r=mysqli_query($c,$q) or die("Error in query:$q".mysqli_error($c));
		
		    }
			
		}
	}
}




?>


</body>

</html>
