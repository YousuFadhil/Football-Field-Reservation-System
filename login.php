<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Login</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<header><?php include('header.html') ?></header>

<div class="container" style="max-width: 70%;">
  <div class="form" >
<form class="form-horizontal" action="login_code.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Login</legend>

<!-- Email input-->
<div class="form-group" >
  <label class="col-md-4 control-label" >Phone Number</label>  
  <div class="col-md-4">
  <input  name="phone" type="phone"  class="form-control input-md" required="" maxlength="8">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Password</label>
  <div class="col-md-4">
    <input  name="pass" type="password" placeholder="" class="form-control input-md" required="" maxlength="16">
    
  </div>
</div>
<br>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
  </div>
</div>
<br>
<p>Dont`t have an account? <a href="register_form.php">Create account</a></p>
<p>Forgot your password? <a href="forget_pass_form.php">Reset it</a></p>
</fieldset>
</form>
</div>
</div>
<footer><?php include('footer.html') ?></footer>

</body>

</html>
