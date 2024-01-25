<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Delete</title>
</head>

<body>
    <?php
    include('connect.php');

    $rno = $_GET['rno'];
    // query to delete
    $q = "delete from tblreservation where rno=$rno";
    mysqli_query($c, $q) or die("Error in $q" . mysqli_error($c));

    // Display
    echo "<h3>The Book Record was Canceld</h3>";

    // Link
    echo "<a href='cancel_book.php'>Back </a>";
    ?>
</body>

</html>