<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZE BANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="card w-100 text-center shadow">
            <div class="card-header" style="background-color:rgb(153, 0, 0);color:aliceblue;">
                New Account Form
            </div>
            <div class="card-body" style="background-color:rgb(252, 210, 210); color:black">
                <form method="POST">
                    <table class="table" style="color: black; border:1px solid rgb(252, 210, 210);">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td><input type="text" name="name" class="form-control" required></td>
                                <th>UID</th>
                                <td><input name="uid" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th for="gender">Gender</th>
                                <td>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                                <th for="dob">Date of Birth</th>
                                <td><input type="date" class="form-control" id="dob" name="dob" required></td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td><input type="number" name="phnno" class="form-control" required></td>
                                <th>Address</th>
                                <td><input type="text" name="address" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="email" name="email" class="form-control" required></td>
                                <th>Password</th>
                                <td><input type="password" name="password" class="form-control" required></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="saveAccount" class="btn " style="background-color:rgb(153, 0, 0);color:aliceblue; border:1px solid white">Register Account</button>
                    <button type="reset" class="btn " style="background-color: black;border:1px solid white; color:white">Reset</button>
                    <p>Already have an account?<a href="login.php" style="color:rgb(153, 0, 0);">Login</a></p>
                </form>
                <?php
                $conn = new mysqli("localhost", "root", "", "bank");
                if(isset($_POST['saveAccount'])){
                $accno = time();
                
                $conn->query("insert into users (email,password,accountno,name,uid,gender,phnno,address,dob) values ('$_POST[email]','$_POST[password]','$accno','$_POST[name]','$_POST[uid]','$_POST[gender]','$_POST[phnno]','$_POST[address]','$_POST[dob]');");
                echo '<script > 
                alert("Account Successfully Created!")</script>';
                }
                
            
                ?>  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      
</body>

</html>
