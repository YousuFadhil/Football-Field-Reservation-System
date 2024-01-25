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
include('connect.php');
include('header.html');
require_once('check_player.php');
// To display the name of the user
$q = "select name from tblcustomer where uid= '$uid'";
$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
$row = mysqli_fetch_assoc($r);
$name = $row["name"];

?>
 </header>
<br>
	<div class="container" style="max-width: 70%;">
		<h2 class="display-6">Cancel Booking</h2>
		<br>
		<?php echo"Hello $name" ?>
		<br>
		<table class="table table-success table-striped">
			<tr>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Date</strong>
				</td>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Time</strong>
				</td>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Plyground</strong>
				</td>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Price</strong>
				</td>
				<td class="text-center" style="mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: Arial; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
					<strong>Delete</strong>
				</td>
			</tr>
			<tr>
				<?php
						
				// query to get data from database
				$q = "select * from tblreservation where uid=$uid order by date";
				$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
				// To convert result table to separate row
				while ($row = mysqli_fetch_assoc($r)) {
					echo "<tr>";
					echo "<td><center>{$row['date']}</center></td>";
					echo "<td><center>{$row['time']}</center></td>";
					$plno=$row['plno'];
					$rno = $row['rno'];
					
					// To get name of the playground
					$q = "select * from tblplayground where plno=$plno ";
					$r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
					// To convert result table to separate row
					while ($row = mysqli_fetch_assoc($r)) {

						echo "<td><center>{$row['name']}</center></td>";
						echo "<td><center>{$row['price']}</center></td>";
					}
					

				
					echo "
					<td><center>
						<button onclick='myFunction()' type='button' class='btn btn-danger btn-sm'>Delete</button>
					</center></td>
					";
					echo "</tr>";
				}
				
					?>
			</tr>


		</table>
<!-- <script>
	function myFunction() {
		
	if (confirm('Are you sure to delete it?') == true) {
		<?php 
			$q = "delete from tblreservation where rno=$rno";
			mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));
		?>;
	} else {
		<?php header('location: cancel_book.php')?>;
	}
	}
</script>
-->
		<br><br>

		<a class="btn btn-default" href="player.php" role="button">Back</a>
	</div>
	<br>




<footer><?php include('footer.html') ?></footer>

</body>

</html>
