
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZE BANK</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body style="background: url(images/152.jpg); background-size: 100%;">
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: rgb(153, 0, 0);">
	  <div class="container-fluid ">
	  <img src="images/logo.jpg" style="height: 5vh;width: 5vh;"/><a class="navbar-brand " href="home.php" style="color: white; text-shadow: 2px 2px rgb(255, 51, 51); font-size: 40px; font-family: 'Times New Roman', Times, serif;margin-left:02vh;font-weight:bold;margin-right:170vh">  MAZE BANK</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		
	  </div>
	</nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5" style="margin-left: -110vh;margin-top:10vh">
                <div class="card">
                    <div class="card-header text-center" style="background-color:rgb(153, 0, 0);color:aliceblue;" >
                        <h2>USER LOGIN</h2>
                    </div>
                    <div class="card-body" style="background-color:rgb(252, 210, 210); color:black">
                        <form method="POST" id="login">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div _ngcontent-fqq-c275="" class="form-group mb-3" style="margin-top: 10px;"><select _ngcontent-fqq-c275="" class="custom-select ng-valid ng-touched ng-dirty" name="selectbtn" id="selectbtn"style="background-color:rgb(153, 0, 0);color:aliceblue; border:2px solid red"><option _ngcontent-fqq-c275="" value="0"> Manager </option><option _ngcontent-fqq-c275="" value="1"> User </option><!----></select></div>
                            <button type="submit" class="btn  btn-block" name="loginbtn" style="margin-left: 170px ;background-color:rgb(153, 0, 0);color:aliceblue; border:2px solid white;">Log in</button>
                            <p>Don't have an account?<a href="userregistration.php" style="color:rgb(153, 0, 0)">Register</a></p>
                        </form>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "bank");
                        if(isset($_POST['loginbtn'])){
                        $email = $_POST['username'];
                        $password = $_POST['password'];
                        $selectbtn = $_POST['selectbtn'];
                        
                        if($selectbtn==1){
                        $result = $conn->query("select * from users where email='$email' AND password='$password'");
                    
                        
                        if($result->num_rows>0)
                                { 



                            session_start();
                                $data = $result->fetch_assoc();
                                $_SESSION['email']=$data['email'];
                            
                                

                                header('location:userdetails.php');
                            
                                }
                            else
                                {
                            echo '<script>alert("Wrong Username or Password!")</script>';
                                }
                        }
                        else{
                            $result = $conn->query("select * from manager where email='$email' AND password='$password'");
                    
                        
                            if($result->num_rows>0)
                                    { 
    
    
    
                                session_start();
                                    $data = $result->fetch_assoc();
                                    $_SESSION['email']=$data['email'];
                                
                                    
    
                                    header('location:mallaccounts.php');
                                
                                    }
                                    else
                                {
                            echo '<script>alert("Wrong Username or Password!")</script>';
                                }
                        }
                    }
                        
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
