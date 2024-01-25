<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Owner</title>
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php
        require_once('check_owner.php');
        include('connect.php');
        // To display the name of the user
        $q = "select name from tblcustomer where uid= '$uid'";
        $r = mysqli_query($c, $q) or die("Error in $q " . mysqli_error($c));
        $row = mysqli_fetch_assoc($r);
        $name = $row["name"];

        include('header.html')
        ?>
    </header>
    <br>
    <div class="container" style="max-width: 70%;">

        <h1 class="display-6">Owner Panel</h1>
        <br>
        <h5><?php echo "Hello $name" ?></h5>


        <br>
        <div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="update_profile_owner.php">update profile</a></button> </div>
        <br>
        <div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="view_owner_playground.php">view owner playground</a></button> </div>
        <br>
        <div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="add_playground.php">add playground</a></button> </div>
        <br>
        <div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="confirm_pyment.php">confirm pyment</a></button> </div>
        <br>
        <div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="change_owner_pass_form.php">Change Password</a></button> </div>
        <br>
    </div>

    <footer><?php include('footer.html') ?></footer>
</body>

</html>