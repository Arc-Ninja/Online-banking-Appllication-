
<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");

$result = $conn->query("select * from users where email='$_GET[id]'");
$data = $result->fetch_assoc();


?><!DOCTYPE html>
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
    
        <div class="container" style="margin-top: 100px;">
            <div class="card w-100 text-center shadowBlue"style="border: 1px solid gold;">
              <div class="card-header bg-dark" style="color: gold;font-size: 25px;font-weight:bold">
                ACCOUNT DETAILS
              </div>
              <div class="card-body bg-dark" style="color: white;">
                <table class="table table-bordered table-sm bg-dark" style="border:2px solid rgb(140, 122, 1);color:white; font-size:large">
                  <tbody style="border:2px solid rgb(140, 122, 1);">
                    <tr>
                        <th>Account No:</th><td><?php
                          echo $data['accountno'];
                           ?></td>
                      <th>Address:</th><td><?php
                          echo $data['address'];
                           ?></td>
                    </tr><tr>
                        <th>Name:</th><td><?php
                          echo $data['name'];
                           ?></td>
                      <th>UID:</th><td><?php
                          echo $data['uid'];
                           ?></td>
                    </tr><tr>
                      <th>Username:</th><td><?php
                          echo $data['email'];
                           ?></td>
                      <th>Contact Number:</th><td><?php
                          echo $data['phnno'];
                           ?></td>
                    </tr><tr>
                        <th>Date of Birth:</th><td><?php
                          echo $data['dob'];
                           ?></td>
                        <th>Gender:</th><td><?php
                          echo $data['gender'];
                           ?></td>
                    </tr>
                  </tbody>
                </table>
                <div style="color: gold;font-size: large;">
                    ACCOUNT BALANCE: ₹<td><?php
                          echo $data['balance'];
                           ?></td>
                  </div>
            </div>
        </div>
      <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>