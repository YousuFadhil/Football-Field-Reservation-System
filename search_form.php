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
<h2 class="display-6">Search For Playground</h2>
<?php 
include('connect.php');
require_once('check_player.php');
?>
	<br>
	<div class="container">
		<br>
		

<form action="search_code.php" method="post">
	<table align="center" class="auto-style1" style="width: 90%">
		<tr>
			<td>Name</td>
			<td><input name="name" type="text" maxlength="30"/></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input name="price" type="number"/>&nbsp;</td>
		</tr>
				<tr>
			<td>&nbsp;</td>
			<td><input name="Submit1" type="submit" value="search" />&nbsp;</td>
		</tr>
	</table>
</form>
<br><br>
<a class="btn btn-default" href="player.php" role="button">Back</a>

</div>
<footer><?php include('footer.html') ?></footer>

</body>

</html>
