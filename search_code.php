<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Cancel Book</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<header>
<?php 
include('header.html');
require_once('check_player.php');
include('connect.php');
include('mylib.php');

 ?>
 </header>

<br>
	<div class="container" style="max-width: 70%;">
		<h2 class="display-6">Search Result</h2>
		<br>
		<table class="table table-success table-striped">
			<tr>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Name</strong>
				</td>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Price</strong>
				</td>
			</tr>
			<tr>
		<tr>

			<?php
			
			$errors = [];

			if (empty($_POST['name']) && empty($_POST['price'])) {
				$errors[] = " User should choose at least one option";
			}else{

			$name= $_POST['name'];
			$price= $_POST['price'];
		}
			if (count($errors) == 0) {
				$q = "select * from tblplayground where name='$name' or price='$price'";
				$r = mysqli_query($c, $q) or die("Error in: $q" . mysqli_error($c));

				if (mysqli_num_rows($r) == 0) {
					echo "<h2>No Results Matching your Search</h2>";
				} else {
					while ($row = mysqli_fetch_assoc($r)) {
						echo "<tr>";
						echo "<td><center>{$row['name']}</center></td>";
						echo "<td><center>{$row['price']}</center></td>";

						echo "</tr>";
					} // end of while
					echo "</table>"; //end of table 	
				}
			} else {
				DisplayErrors();
			}
			echo "<p class='auto-style2'><a href='search_form.php'>Search Again</a></p>";

			?>
			</tr>


		</table>
		<br><br>

		<a class="btn btn-default" href="player.php" role="button">Back</a>
	</div>
	<br>




<footer><?php include('footer.html') ?></footer>

</body>

</html>
