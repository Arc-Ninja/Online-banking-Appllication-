<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
if (isset($_GET['delete'])) 
  {
    if ($conn->query("delete from users where email = '$_GET[delete]'"))
    {
      header("location:mallaccounts.php");
    }
  }
  



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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid ">
            <img src="images/logo.jpg" style="height: 5vh;width: 5vh;"/><a class="navbar-brand " href="#" style="color: white; text-shadow: 2px 2px rgb(255, 51, 51); font-size: 40px; font-family: 'Times New Roman', Times, serif;margin-left: 2vh;font-weight:bold;">  MAZE BANK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="#" style="font-size: 20px;color:gold">All Accounts</a>
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
          <div class="container" style="margin-top: 60px;font-size: 17px;">
            <div class="card w-100 text-center">
              <div class="card-header bg-dark" style="color: gold; font-weight:bold; font-size:25px">
                All accounts
              </div>
              <div class="card-body bg-dark">
               <table class="table table-bordered table-sm bg-dark" style="border:2px solid rgb(140, 122, 1);color:white">
              <thead>
                <tr>
                  
                  <th scope="col">Name</th>
                  <th scope="col">Account No.</th>
                  <th scope="col">Current Balance</th>
                  <th scope="col">Contact</th>
                 
                </tr>
              </thead>
              <tbody>
                <?php
                $result = $conn->query("select * from users");
                
              $i = 0;
              if($result->num_rows>0){
                while($data = $result->fetch_assoc()){
                  $i++;
                ?>
                  <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['accountno']; ?></td>
                    <td><?php echo $data['balance']; ?></td>
                    <td><?php echo $data['phnno']; ?></td>
                    
                    <td>
                    <a href="show.php?id=<?php echo $data['email'] ?>" class='btn  btn-sm bg-dark' data-toggle='tooltip' title="View More info" style="color:gold;border:1px solid gold;" >View</a>
                    
                    <a href="mallaccounts.php?delete=<?php echo $data['email'] ?>" class='btn  btn-sm bg-dark' data-toggle='tooltip' title="Delete this account" style="color: red;border:1px solid red;">Delete</a>
                    
                  </td>
                    
                  </tr>
                  <?php
                }
              }
              else{
                echo "No users registered.";
              }

               ?>
              </tbody>
            </table>
            </div>
            </div>

            <div class="container" style="font-size: larger; margin-top: 5vh;" >
            <div class="card  col-md-7 mx-auto">
            <div class="card-header text-center bg-dark" style="color: gold;">
              Send Notice
            </div>
            <div class="card-body" style="background-color: gray;">
                <form method="post">
                    
                      
                      <textarea class="form-control" name="msg" required placeholder="Write your message"></textarea>
                      <button type="submit" name="send" class="btn  btn-block btn-sm my-1 center bg-dark" style="font-size: medium;color:gold;">Send</button>
                    
                </form>
                <?php
                if(isset($_POST['send'])){
                  $mssg = $_POST['msg'];
                  if($conn->query("insert into notice (mssg) values ('$mssg')")){
                    echo '<script>alert("Notice Sent")</script>';
                  }
                }
                ?>

              <br>
            </div>
            <div class="card-footer  bg-dark" style="text-align: center; color:gold">
             MAZE BANK
            </div>  
            </div>
            
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>