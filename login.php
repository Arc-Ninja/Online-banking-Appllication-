<?php
    $conn = new mysqli("localhost", "root", "", "bank");
    $email = $_POST['username'];
    $password = $_POST['password'];
    $selectbtn = $_POST['selectbtn'];
    if($selectbtn==1){
    $result = $conn->query("select * from users where email='$email' AND password='$password'");
   
    echo mysqli_num_rows($result);
    echo " user";
    if($result->num_rows>0)
		    { 
		      header('location:home.html');
          echo " pass";
		     }
		else
		    {
		      $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>";
          
          echo " error";
		    }
    }
    else{
      echo "manager";
    }
    
    
    ?>  