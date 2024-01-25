<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Confirm delete plyground</title>
</head>

<body>
    <?php
   
	$plno = $_GET['plno'];
    	
    // Display
    echo "<h3>Are you sure you want to delete it?</h3>";

    echo "<a href='delete_playground.php?plno=$plno'>Yes</a>";
    echo "&emsp;&emsp;";
    echo "<td><a href='view_owner_playground.php'>No</a>";

    ?>
</body>

</html>