<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>mylib</title>
</head>

<body>
	<?php
	function DisplayErrors()
	{
		global $errors;
		echo "Some error/s were encountered ";
		echo "<ol>";
		foreach ($errors as $k => $v) {
			echo "<li>$v</li>";
		}
		echo "<ol>";

		echo "<br><br>";
		echo "<a href='javascript:history.back()'>Click here to correct errors</a>";
	}
	?>
</body>

</html>