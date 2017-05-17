<?php

session_start();

     if(isset($_SESSION['suser']) )
        {
          $zuser= $_SESSION["suser"] ;
          $zsuser=$_GET['link'];
        }



    $query="SELECT uname,password FROM `user` where uname='$name' AND password='$password' " ;

      $result=$conn->query($query);
      if(mysqli_num_rows($result)>0)
      
    {

    	if(isset($_POST['remember']))
    	{

            setcookie('user', $_POST['uname'], time()+60*60*24, '/');
            setcookie('pass', $_POST['psw'], time()+60*60*24, '/');
    	}
    	else{
            setcookie('user', $_POST['uname'], time()+1, '/');
            setcookie('pass', $_POST['psw'], time()+1, '/');
    	}
      echo "Login successful <br>";
	  $_SESSION['suser']=$name ;

	  
	  if($name==='admin')
	  {  
        header("location:admin.php");
	  }
	  else
	  {  
	  	header("location:user.php");
	  }



?>