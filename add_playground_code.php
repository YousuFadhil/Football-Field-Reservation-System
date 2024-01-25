<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Add Playground Code</title>
</head>

<body>
    <?php
    // establish connection
    include('connect.php');
    require_once('check_owner.php');




    // receive data from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $price = $_POST['price'];
    $location = $_POST['location'];

    // insert data into the database
    $q = "insert into tblplayground(name,phone,price,location,uid)values('$name','$phone','$price','$location','$uid')";
    mysqli_query($c, $q) or die('Error in quiry: $q ' . mysqli_error($c));

    // Redirect the user to error alert 
    echo "<script>alert('Your playground details were inserted successfully.')</script>";
    echo "<script>window.location.href='owner.php'</script>"; //Redirects the user with JavaScript


    ?>
</body>

</html>