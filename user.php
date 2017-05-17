<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>USER PANEL</title>
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
       .table {
    border-radius: 5px;
    width: 500px;
    margin: 0px auto;
    float: none;
}

body{
    background-image: url('userback.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
   
    
}
  
    </style>

    <script type="text/javascript">
     /* $(document).ready(function()
        {
          $(#changing).click(function()
          {
            $(#change).text("Request sent");
          });
        });
         */
        function sendrequest()
        {
        document.getElementById("change").innerHTML=" REQUEST SENT";          
        }
       
    </script>
	</head>
	<body>

      <?php

      session_start();
       if(isset($_SESSION['suser']))
        {
          $zuser= $_SESSION["suser"] ;
        }

       ?>


<script src="https://code.jquery.com/jquery-3.1.0.js"></script>


<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      <?php

       if(isset($_SESSION['suser']))
        {
          echo 'Welcome ' . $_SESSION["suser"] ;
        }
       ?>
      </a>
    </div>
    <div class="collapse navbar-collapse" style="float: right;">
      <ul class="nav navbar-nav">
      <li style="margin-top: 12px; margin-right: 20px;"> <input type="text" placeholder="Search"/></li>
        <li class="active"><a href="user.html">HOME</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container" style="margin-top: 40px;">
  
  <div style="width:500px; ">
    
    <table class="table table-hover">
  <thead class="thead-inverse">
    <tr>
      <th>STATION</th>
      <th> STATUS</th>
      
    </tr>
  </thead>
  <tbody style="color: #fff">
   <!--<tr>
      <td >station 1</td>
      <td check </td>
    </tr>
    <tr>
      <td>station 2</td>
      <td> <a href="">check </a></td>
      
    </tr>
    <tr>
      <td>station 3</td> 
      <td ><a href=""> check </a></td>
    </tr>
    <tr>
      <td>station 4 </td> 
      <td> <a href=""> check </a> </td>
    </tr>
    <tr>
      <td>station 5 </td> 
      <td> <a href=""> check </a> </td>
    </tr>
    <tr>
      <td>station 6 </td> 
      <td> <a href=""> check </a> </td>
    </tr>
    <tr>
      <td>station 7 </td> 
      <td> <a href=""> check </a> </td>
    </tr>
    <tr>
      <td>station 8 </td> 
      <td> <a href=""> check </a> </td>
    </tr>
    -->

    <?php

    $conn= new mysqli("localhost","root","","arduino");
    $query="SELECT sname FROM `user` WHERE uname='$zuser'; " ;

      $result=$conn->query($query);
    
    print '<table>';
    
    if(mysqli_num_rows($result)>0)
   {
      while($row=mysqli_fetch_array($result))
      {
         $a=$row['sname'];
         print "<tr ><td style='color:#fff;' >" .$a . '</td><td>' . '<button onclick="sendrequest()" style="margin-left:175px ; margin-top:20px" id="change"> 
         CHECK </button>'. '</td></tr>';
    
      }
    }
  
     print '</table>';

    //on clicking the station go to check.php and passing the station name
     //check.php?link='.$a.' 


    ?>
  </tbody>                                                                                                                                                                                
</table>

  </div>

  
</div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>