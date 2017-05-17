<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
   
    <style type="text/css">

body{
    background-image: url('loginback.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body >
<?php
 
 if((isset($_COOKIE['user'])) && (isset($_COOKIE['pass']))) 
 {
   $e= $_COOKIE['user'];
   $p= $_COOKIE['pass'];
 }
 
 ?>

<form method="post" action="log.php">

  <div class="container">

<div style="text-align: center; margin-top: 150px;">
  <div class="form-group">
    <label style="color: #fff"><b>Username</b></label> </br>
    <input type="text" placeholder="Enter Username" name="uname" value="<?php echo"$e" ?>" required> 
  </div>
  <div class="form-group">
    <label style="color: #fff"><b>Password</b></label> </br>
    <input type="password" placeholder="Enter Password" name="psw" value="<?php echo"$p" ?>" required> 
  </div>  
   <div class="form-group" style="color: #fff">     
    <input type="submit"  value="LOGIN" name="login-submit"> </br>
    <input type="checkbox" checked="checked" name="remember"> Remember me </br>
  </div>

</div>
</form>						

</body>
</html>