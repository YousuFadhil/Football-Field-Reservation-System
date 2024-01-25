<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="en-us" http-equiv="Content-Language" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Untitled 1</title>
	<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		.auto-style1 {
			text-align: center;
		}

		.auto-style3 {
			text-align: left;
			font-size: large;
		}

		.auto-style4 {
			font-size: large;
		}

		.auto-style5 {
			border-style: solid;
			border-width: 1px;
		}

		.auto-style6 {
			text-align: center;
			font-size: xx-large;
		}

		.auto-style7 {
			text-align: left;
			font-size: large;
			font-family: Calibri, sans-serif;
		}

		.auto-style12 {
			text-align: left;
		}
	</style>
</head>

<body>
	<header><?php include('header.html') ?></header>

	<br>
	<div class="container" style="max-width: 70%;">
		<h2 class="display-6">Update owner Profile</h2>
		<br>

		<?php
		include('connect.php');
		require_once('check_owner.php');

		$q = "select * from tblcustomer where uid='$uid'";
		$r = mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));
		$row = mysqli_fetch_assoc($r);

		////////////////////////////////////////////////////////////////
		$name = $row['name'];
		$phone = $row['phone'];
		$email = $row['email'];

		$q = "select * from tbluser where uid='$uid'";
		$r = mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));
		$row = mysqli_fetch_assoc($r);
		$s_ans = $row['s_ans'];

		?>

		<p class="auto-style6">
		<form action="update_profile_owner_code.php" method="post">
			<div class="auto-style1">
				<table align="center" style="width: 70%; " class="auto-style5">
					<tr>
						<td class="auto-style3" style="width: 381px">
							<span class="auto-style4" style="font-family: &quot;Calibri&quot;,sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-hansi-theme-font: minor-latin; mso-bidi-theme-font: minor-latin; color: black; mso-ansi-language: EN-IN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA">
								N</span><span class="auto-style4" lang="EN-IN" style="font-family: &quot;Calibri&quot;,sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-hansi-theme-font: minor-latin; mso-bidi-theme-font: minor-latin; color: black; mso-ansi-language: EN-IN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA">ame</span>
						</td>
						<td class="auto-style12">
							<input name="name" type="text" maxlength="20" required value="<?php echo $name; ?>" />&nbsp;
						</td>
					</tr>
					<tr>
						<td class="auto-style3" style="width: 381px">
							<span style="font-family: &quot;Calibri&quot;,sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-hansi-theme-font: minor-latin; mso-bidi-theme-font: minor-latin; color: black; mso-ansi-language: EN-IN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA">
								P</span><span lang="EN-IN" style="font-family: &quot;Calibri&quot;,sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-hansi-theme-font: minor-latin; mso-bidi-theme-font: minor-latin; color: black; mso-ansi-language: EN-IN; mso-fareast-language: EN-IN; mso-bidi-language: AR-SA">hone
								number</span>
						</td>
						<td class="auto-style12">
							<input name="phone" type="text" maxlength="8" required value="<?php echo $phone; ?>" />&nbsp;
						</td>
					</tr>
					<tr>
						<td class="auto-style7" style="width: 381px">Email</td>
						<td class="auto-style12">
							<input name="email" type="email" maxlength="30" required value="<?php echo $email; ?>" />&nbsp;
						</td>
					</tr>
					<tr>
						<td class="auto-style12" style="width: 381px">Security
							Question</td>
						<td class="auto-style12">
							<select name="s_q">
								<option selected="selected">Choose a question</option>
								<option>In what city were you born?</option>
								<option>What is the name of your school?</option>
								<option>What was your favorite food?</option>
							</select>&nbsp;
						</td>
					</tr>
					<tr>
						<td class="auto-style12" style="width: 381px">
							Security Answer</td>
						<td class="auto-style12">
							<input name="s_ans" type="text" maxlength="30" required value="<?php echo $s_ans; ?>" />&nbsp;
						</td>
					</tr>
					<tr>
						<td class="auto-style3" style="width: 381px">
							<input name="Submit1" type="submit" value="submit" />&nbsp;
						</td>
						<td class="auto-style12">
							<input name="Reset1" type="reset" value="reset" />&nbsp;
						</td>
					</tr>
				</table>
			</div>
		</form>
		<br><br>
		<a class="btn btn-default" href="owner.php" role="button">Back</a>

	</div>
	<footer><?php include('footer.html') ?></footer>

</body>

</html>