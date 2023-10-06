<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAZE BANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url(images/135.jpg); background-size: 100%;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid ">
            <img src="images/logo.jpg" style="height: 5vh;width: 5vh;"/><a class="navbar-brand " href="#" style="color: white; text-shadow: 2px 2px rgb(255, 51, 51); font-size: 40px; font-family: 'Times New Roman', Times, serif;margin-left: 2vh;font-weight:bold;">  MAZE BANK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="mallaccounts.php" style="font-size: 20px;color:gold">All Accounts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mregistration.php" style="font-size: 20px;color:gold">Add Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mfeedback.php" style="font-size: 20px;color:gold">Feedback</a>
                  </li>
                    
                    <form class="form-inline my-2 my-lg-0">
                        <a href="logout.php" data-toggle="tooltip" title="Logout" class="btn btn-outline-light mx-1" style="margin-top: 5px;color:gold"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </form>
                </ul>		  
              </div>
            </div>
          </nav><br><br>

    <div class="container mt-5">
        <div class="card w-100 text-center shadow">
            <div class="card-header bg-dark" style="color: gold; font-weight:bold; font-size:25px">
                New Account Form
            </div>
            <div class="card-body bg-dark" style="color:gold">
                <form method="POST">
                    <table class="table bg-dark" style="color: aliceblue; border:1px solid rgb(37,37,37)">
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
                    <button type="submit" name="saveAccount" class="btn bg-dark" style="color:gold;border:1px solid gold">Register Account</button>
                    <button type="reset" class="btn bg-dark" style="color: white;border:1px solid white">Reset</button>
                   
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
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
      
</body>

</html>
