<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];



?>
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
<body>
    <body style="background: url(images/135.jpg); background-size: 100%;">
    <nav class="navbar navbar-expand-sm navbar-light bg" style="background-color: rgb(153, 0, 0);">
        <div class="container-fluid ">
          <img src="images/logo.jpg" style="height: 5vh;width: 5vh; "/><a class="navbar-brand " href="userdetails.php" style="color: white; text-shadow: 2px 2px rgb(255, 51, 51); font-size: 40px; font-family: 'Times New Roman', Times, serif;margin-left: 2vh;font-weight:bold">  MAZE BANK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link" href="userdetails.php" style="font-size: 20px;color: aliceblue;">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" style="font-size: 20px;color: aliceblue;">Transaction History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sendmoney.php" style="font-size: 20px;color: aliceblue;">Send Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="helpcard.php" style="font-size: 20px;color: aliceblue;">Customer Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html" style="font-size: 20px; color: aliceblue;">About Us</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php" data-toggle="tooltip" title="Logout" class="btn btn-outline-dark mx-1" ><i class="fa-solid fa-right-from-bracket"></i></a>
            </form>		  
          </div>
        </div>
      </nav><br><br>
          <div class="container" style="font-size: larger;">
            <div class="card  col-md-6 mx-auto" style="height: 70vh;">
            <div class="card-header text-center" style="background-color:rgb(153, 0, 0); color:aliceblue;">
              Help Card
            </div>
            <div class="card-body" style="background-color:rgb(252, 210, 210);">
                <form method="POST">
                    
                      <h5>Enter your message</h5>
                      <textarea class="form-control" name="msg" id="msg" required placeholder="Write your message" style="height: 40vh;"></textarea>
                      <button type="submit" name="send" class="btn  btn-block btn-sm my-1" style="font-size: medium;background-color: rgb(153, 0, 0); color:aliceblue">Send</button>
                    
                </form>
                <?php 
                if(isset($_POST['send'])){
                  $mssg = $_POST['msg'];
                  if($conn->query("insert into help (email,mssg) values ('$email','$mssg')")){
                  echo '<script>alert("Message Sent Successfully!")</script>';
                  }
                  else{
                    echo '<script>alert("Couldnt send message")</script>';
                  }
                }
                ?>

              <br>
            </div>
            <div class="card-footer " style="background-color:rgb(153, 0, 0); color:aliceblue;">
             MAZE BANK
            </div>  
            </div>
          <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>