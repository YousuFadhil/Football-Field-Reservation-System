<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Forget Password Form</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<header><?php include('header.html') ?></header>

<div class="container">
	<form action="forget_pass_code.php" method="post">
		<table align="center" style="width: 100%">
			<tr>
				<td>Forget Password</td>
			</tr>
			<tr>
				<td><input name="phone" type="text" placeholder="Phone" maxlength="8" required />&nbsp;</td>
			</tr>
			<tr>
				<td class="auto-style12">
				<select name="s_q" required>
				<option value="In what city were you born?">In what city were you born?</option>
				<option value="What is the name of your school?">What is the name of your school?</option>
				<option value="What was your favorite food?">What was your favorite food?</option>
				</select>&nbsp;</td>
			</tr>
			<tr>
				<td><input name="s_ans" type="text" placeholder="Answer question" />&nbsp;</td>
			</tr>
			<tr>
				<td><input name="new_pass" type="password" placeholder="Nwe password" />&nbsp;</td>
			</tr>
			<tr>
				<td><input name="Submit1" type="submit" value="submit" />&nbsp;</td>
			</tr>
		</table>
	</form>
	</div>
<footer><?php include('footer.html') ?></footer>
</body>

</html>
