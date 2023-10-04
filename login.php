<?php
    $conn = new mysqli("localhost", "root", "", "bank");
    $email = $_POST['username'];
    $password = $_POST['password'];
    $selectbtn = $_POST['selectbtn'];
    if($selectbtn==1){
    $result = $conn->query("select * from users where email='$email' AND password='$password'");
   
    
    if($result->num_rows>0)
		    { 
		      header('location:userdetails.html');
          
		     }
		else
		    {
          echo '<script>alert("Wrong Username or Password!")</script>';
		    }
    }
    else{
      echo "manager";
    }
    
    
    ?>  