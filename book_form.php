<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="en-us" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Book Form</title>
	<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		.auto-style1 {
			border-style: solid;
			border-width: 1px;
		}
	</style>
</head>

<body>
	<header><?php include('header.html') ?></header>
	<br>
	<div class="container" style="max-width: 70%;">
		<h2 class="display-6">Book Playground</h2>
		<?php
		include('connect.php');
		require_once('check_player.php');
		?>
		<br>
		<div class="container">
			<br>
			<table class="table table-success table-striped">
				<tr>
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
				</tr>
				<tr>
					<?php
					// query to get data from database
					$q = "select * from tblplayground order by price";
					$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
					$r_num = mysqli_num_rows($r);
					if ($r_num == 0) {
						echo"<h5>No Playground Available yet</h5>";
					} else {
						// To convert result table to separate row
						while ($row = mysqli_fetch_assoc($r)) {
							echo "<tr>";
							echo "<td><center>{$row['name']}</center></td>";
							echo "<td><center>{$row['phone']}</center></td>";
							echo "<td><center>{$row['price']}</center></td>";
							echo "<td><center>{$row['location']}</center></td>";



							echo "</tr>";
						}
					}
					?>
				</tr>
			</table>
			<br>

			<form action="book_code.php" method="post">
				<table align="center" class="auto-style1" style="width: 90%">
					<tr>
						<td>Date</td>
						<td><input name="date" type="date" /></td>
					</tr>
					<tr>
						<td>Time</td>
						<td><select name="time">
								<?php
								$seatarr = array();
								$slots = [0 => "4-5", 1 => "6-7", 2 => "8-9", 3 => "10-11"];

								$len = sizeof($seatarr);
								$tslots = sizeof($slots);

								for ($j = 0; $j < $tslots; $j++) {
									$found = 'n';
									for ($i = 0; $i < $len; $i++) {
										if ($seatarr[$i] == $slots[$j]) {
											$found = 'y';
										}
									}
									if ($found == 'n') {
										echo '<option value="' . $slots[$j] . '">';
										echo $slots[$j];
										echo '</option>';
									}
								}
								?>
								<option selected="selected" value="x">Select Time</option>
							</select></td>
					</tr>
					<tr>
						<td>Playground</td>
						<td><select name="name">
								<?php

								// query to get data from database
								$q = "select * from tblplayground ";
								$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
								// To convert result table to separate row
								while ($row = mysqli_fetch_assoc($r)) {
									echo "<option>{$row['name']}</option>";
								}
								?>
								<option selected="selected" value="x">Select Playground</option>
							</select></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input name="Submit1" type="submit" value="submit" />&nbsp;</td>
					</tr>
				</table>
			</form>
			<br><br>
			<a class="btn btn-default" href="player.php" role="button">Back</a>

		</div>
		<footer><?php include('footer.html') ?></footer>

</body>

</html>