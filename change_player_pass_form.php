<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Change Password Form</title>
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
	<h2 class="display-6">Change Password</h2>
	<br>
	<form action="change_pass_code.php" method="post">
		<table align="center" style="width: 70%" class="auto-style1">
			<tr>
				<td>Old password</td>
				<td><input name="old_pass" type="password"/>&nbsp;</td>
			</tr>
			<tr>
				<td>Create new password</td>
				<td><input name="new_pass" type="password"/>&nbsp;</td>
			</tr>
			<tr>
				<td></td>
				<td><input name="Submit1" type="submit" value="submit" />&nbsp;</td>
			</tr>
		</table>
	</form>
		<br><br>

	<a class="btn btn-default" href="player.php" role="button">Back</a>
</div>
<br>

</div>
<footer><?php include('footer.html') ?></footer>
</body>

</html>
