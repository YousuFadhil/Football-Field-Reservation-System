<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Admin</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<?php require_once('check_admin.php') ?>
<header><?php include('header.html') ?></header>
<br>
<div class="container" style="max-width: 70%;">

    
<h1 class="display-6">Admin Panel</h1>
<br>
<div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="view_owner.php"> View Owner </a> </button> </div>
<br>
<div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="view_player.php">View Player</a></button> </div>
<br>
<div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="view_admin_playground.php">View Playground</a></button> </div>
<br>
<div class="row"> <a class="btn btn-primary btn-lg btn-block" a href="change_pass_form.php">Change Password</a></button> </div>
<br> 
</div>
<footer><?php include('footer.html') ?></footer>

</body>

</html>
