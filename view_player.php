<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>View Player</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<header><?php include('header.html') ?></header>

	<br>
	<div class="container">
		<h1 class="display-6">View Player Details</h1>
		<br>
		<table class="table table-success table-striped">
			<tr>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>pid</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Name</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Phone</strong>
				</td>
				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Email</strong>
				</td>
				<!--<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Location</strong>
				</td>
-->				<td class="auto-style5" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Delete</strong>
				</td>
			</tr>
			<tr>
				<?php
				// Connect to the database
				include('connect.php');

				// query to get data from database
				$q = "select * from tblplayer order by name";
				$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
				// To convert result table to separate row
				while ($row = mysqli_fetch_assoc($r)) {
					echo "<tr>";
					echo "<td><center>{$row['pid']}</center></td>";
					echo "<td><center>{$row['name']}</center></td>";
					echo "<td><center>{$row['phone']}</center></td>";
					echo "<td><center>{$row['email']}</center></td>";
				


					$pid = $row['pid'];
					// link for confirm with data token
					echo "<td><center><button type='button' class='btn btn-danger btn-sm'><a href='confirm_player.php?pid=$pid'>Delete</a></button></center></td>";

					echo "</tr>";
				}
				?>
			</tr>
		</table>
		<br><br>

		<a class="btn btn-default" href="admin.php" role="button">Back</a>
	</div>
	<br>

<footer><?php include('footer.html'); ?></footer>

</body>

</html>
