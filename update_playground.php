<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Update playground</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
	font-size: xx-large;
}
</style>
</head>

<body>
<?php 
include('connect.php');
require_once('check_owner.php');

$plno=$_GET['plno'];
$q= "select * from tblplayground where plno='$plno'";
$r=mysqli_query($c,$q)or di('Error in $q: '.mysqli_error($c));
while($row=mysqli_fetch_assoc($r)){
	$name=$row['name'];
	$phone=$row['phone'];
	$price=$row['price'];
	$location=$row['location'];
}

?>
<p class="auto-style1">EDIT PLYGROUND</p>
<form action="update_playground_code.php" method="post">
	<table align="center" style="width: 70%">
	<tr>
			<td>Playground No.</td>
			<td>
			<input name="plno" type="text" readonly="" value="<?php echo $plno?>"/>&nbsp;</td>
		</tr>

		<tr>
			<td>Name</td>
			<td><input name="name" type="text" value="<?php echo $name?>"/>&nbsp;</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input name="phone" type="number" value="<?php echo $phone?>"/>&nbsp;</td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input name="price" type="number" value="<?php echo $price?>"/>&nbsp;</td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input name="location" type="text" value="<?php echo $location?>"/></td>
		</tr>
		<tr>
			<td><input name="Submit1" type="submit" value="submit" />&nbsp;</td>
			<td><input name="Reset1" type="reset" value="reset" />&nbsp;</td>
		</tr>
	</table>
</form>

</body>

</html>
