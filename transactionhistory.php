<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
$result = $conn->query("select accountno from users where email='$email'");
$data1 = $result->fetch_assoc();
$result1 = $conn->query("select * from history where accountno = '$data1[accountno]' order by id desc");



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
<style>table, th, td ,tr{
  border: 1px solid black;
}</style>
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
      <p class="text-center" style="font-size: 40px; color:aliceblue;text-shadow: 2px 2px rgb(255, 51, 51);">Transaction History</p>
      <div class="container">
        <div class="card w-75 mx-auto shadowBlue"style="border: 1px solid black;">
          <div class="card-body" style="background-color: rgb(80, 0, 0);color: white;">
            <table class="table table-hover" style="border: 1px solid white;color: white;">
              <thead style="background-color: rgb(153, 0, 0);color: white;">
                <tr>
                  <th scope="col" style="text-align: center;border: 1px solid white">Name</th>
                  <th scope="col" style="text-align: center;border: 1px solid white">Amount(₹)</th>
                  <th scope="col" style="text-align: center;border: 1px solid white">Type</th>
                </tr>
              </thead>
              
               
                  <?php 
                  if($result1->num_rows>0){
                    while($data = $result1->fetch_assoc()){
                      ?>
                      <tbody style="border: 1px solid black; background-color:rgb(252, 210, 210); color:black">
                      <tr><td style="border: 1px solid black;"><?php echo $data['name']; ?></td>
                      <td style="border: 1px solid black;"><?php echo $data['amount']; ?></td>
                      <td style="border: 1px solid black;"><?php echo $data['type']; ?></td></tr>
                      </tbody>
                      <?php
                    }
                  }
                  else{
                    echo "No Transactions!";
                  }
                  ?>
               
              
            </table>
          </div>
    </div>
      <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>