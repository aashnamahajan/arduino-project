<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>ADMIN PANEL</title>
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
    
		<link href="css/styles.css" rel="stylesheet">
    <style type="text/css">
    body{
   background-color: #000;

    }
    </style>
	
  </head>
	<body>


<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ADMIN</a>
    </div>
    <div class="collapse navbar-collapse" style="float: right;">
      <ul class="nav navbar-nav">
        <li style="margin-top: 12px; margin-right: 20px;"> <input type="text" placeholder="Search"/></li>
        <li class="active"><a href="admin.html">HOME</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  
  <div class="" style="margin-top: 30px; color: #fff;">
     
     <table class="table" id="table_body">
  <thead class="thead-inverse">
    <tr>
      <th> CAR </tH>
      <th> SOC </tH>
      <th> VIOLENCE RATE </tH>
      <th> STATUS </tH>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td> Maruti Suzuki </td>
      <td> 70% </td>
      <td> 30% </td>
      <td> 
         <button type="button" class="btn btn-success"> approve </button>
         <button type="button" class="btn btn-danger"> deny </button> 
      </td>
    </tr>
     <tr>
      <td> BMW </td>
      <td> 60% </td>
      <td> 10% </td>
      <td> 
         <button type="button" class="btn btn-success"> Approve </button>
         <button type="button" class="btn btn-danger"> Deny </button> 
      </td>
    </tr>

  
  </tbody>
</table>


  </div>
  
</div><!-- /.container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>