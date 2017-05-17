<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title> STATION</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    
    <script >
    </script>
		<link href="css/styles.css" rel="stylesheet">


    <style type="text/css">

    body{
    background-image: url('loginback.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    }
    </style>

	</head>
	<body >


<script src="https://www.gstatic.com/firebasejs/3.7.3/firebase.js"></script>

<style type="text/css">
  .body{
    background-image: "stationback.jpg" ;

  }
</style>




<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{name}}</a>
    </div>
    <div class="collapse navbar-collapse" style="float: right;">
      <ul class="nav navbar-nav">
        <li class="active"><a href="user.html">HOME</a></li>
        <li><a href="logout.php" name="logout">LOGOUT</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div>
  
<div class="card" style="width: 30rem; text-align: center; margin-top: 50px; margin-left: 450px; background-color: #b2b2b2">
  <img class="card-img-top" src="station.jpg" alt="Card image cap" width="300px" height="200px" style="margin-top: 10px;">
  <div class="card-block">
    <h4 class="card-title">STATION NAME</h4>
    <p class="card-text">
        <table>
          <tr >
             <th>ADDRESS </th>
             <td>xx</td>
          </tr>
          <tr>
             <th>DISTANCE</th>
             <td>xx</td>
          </tr>
          <tr>
             <th>TIME</th>
             <td>xx</td>
          </tr>
          <tr>
             <th>SLOT</th>
             <td>xx</td>
          </tr>
          <tr>
             <th>WAITING TIME</th>
             <td>xx</td>
          </tr>
          <tr>
             <th>ESTIMATED RATE &nbsp &nbsp &nbsp</th>
             <td>xx</td>
          </tr>
        </table>
    </p>
  </div>
</div>

</div>

<script src="card.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>