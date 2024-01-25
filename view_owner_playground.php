<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>View Playground</title>
	<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<?php require_once('check_owner.php') ?>

	<header><?php include('header.html') ?></header>

	<br>
	<div class="container">
		<h1 class="display-6">View Owner Playground Details</h1>
		<br>
		<table class="table table-success table-striped">
			<tr>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>NO</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Name</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Phone</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Price</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Location</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Update</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Delete</strong>
				</td>
			</tr>
			<tr>
				<?php
				// Connect to the database
				include('connect.php');
				//$oid=$_SESSION['oid'];

				// query to get data from database
				$q = "select * from tblplayground where uid='$uid' order by plno";
				$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));

				$r_num = mysqli_num_rows($r);
				if ($r_num == 0) {
					echo "<h5>No Playground Available Yet</h5>";
				} else {
					// To convert result table to separate row
					while ($row = mysqli_fetch_assoc($r)) {
						echo "<tr>";
						echo "<td><center>{$row['plno']}</center></td>";
						echo "<td><center>{$row['name']}</center></td>";
						echo "<td><center>{$row['phone']}</center></td>";
						echo "<td><center>{$row['price']}</center></td>";
						echo "<td><center>{$row['location']}</center></td>";


						$plno = $row['plno'];

						// link for update with data token
						echo "<td><center><button type='button' class='btn btn-info btn-sm'><a href='update_playground.php?plno=$plno'>Update</a></button></center></td>";
						// link for confirm with data token
						echo "<td><center><button type='button' class='btn btn-danger btn-sm'><a href='confirm_playground.php?plno=$plno'>Delete</a></button></center></td>";

						echo "</tr>";
					}
				}
				?>
			</tr>
		</table>
		<br><br>

		<a class="btn btn-default" href="owner.php" role="button">Back</a>
	</div>
	<br>

	<footer><?php include('footer.html'); ?></footer>

</body>

</html>