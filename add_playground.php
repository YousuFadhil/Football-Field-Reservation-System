<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="en-us" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Add playground</title>
	<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		.auto-style1 {
			text-align: center;
			font-size: xx-large;
		}

		.auto-style2 {
			border-style: solid;
			border-width: 1px;
		}
	</style>
</head>

<body>
	<header>
		<?php 
		include('header.html');
		require_once('check_owner.php');
		include('connect.php');

		$q= "select * from tblcustomer where uid='$uid' ";
		$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
		$row= mysqli_fetch_array($r);
		$phone = $row['phone'];
		?>
		</header>

	<br>
	<div class="container" style="max-width: 70%;">
		<h2 class="display-6">Add Playground</h2>
		<br>

		<?php require_once('check_owner.php') ?>


		<form action="add_playground_code.php" method="post">
			<table align="center" style="width: 70%" class="auto-style2">
				<tr>
					<td>Name</td>
					<td><input name="name" type="text" />&nbsp;</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input name="phone" type="text" value="<?php echo $phone; ?>" />&nbsp;</td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input name="price" type="text" />&nbsp;</td>
				</tr>
				<tr>
					<td>Location</td>
					<td><input name="location" type="text" /></td>
				</tr>
				<tr>
					<td><input name="Submit1" type="submit" value="submit" />&nbsp;</td>
					<td><input name="Reset1" type="reset" value="reset" />&nbsp;</td>
				</tr>
			</table>
		</form>
		<br><br>
		<a class="btn btn-default" href="owner.php" role="button">Back</a>

	</div>

	<footer><?php include('footer.html') ?></footer>

</body>

</html>