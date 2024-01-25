<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>test</title>
</head>

<body>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  let text;
  if (confirm("Are you sure to delete?") == true) {
    // Here I want to run PHP code  
    <?php 
			$q = "delete from tblreservation where rno=$rno";
			mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));
		?>;
  } else {
    // Here I want to run PHP code  
    <?php header('location: cancel_book.php')?>;
  }
}
</script>

</body>

</html>
