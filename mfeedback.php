<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
if (isset($_GET['delete'])) 
  {
    if ($conn->query("delete from help where id = '$_GET[delete]'"))
    {
      header("location:mfeedback.php");
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
<body style="background: url(images/135.jpg); background-size: 100%;">
    <body style="background:#e1c161;background-size: 100%">
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
        <div class="container" style="margin-top: 50px;">
            <div class="card w-100 text-center">
                <div class="card-header bg-dark" style="color: gold;font-weight:bold; font-size:25px">
                    Feedbacks
                </div>
                <div class="card-body bg-dark">
                    <table class="table table-bordered table-sm bg-dark text-white" style="border:2px solid rgb(140, 122, 1);">
                        <thead style="color: gold;">
                            <tr>
                            <th scope="col">#</th>
                            
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            $result = $conn->query("select * from help");
                            if ($result->num_rows > 0)
                            {
                                while ($row = $result->fetch_assoc())
                                {$i++;
                            ?>
                            <tr>
                                <td><?php echo $i."." ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['mssg'] ?></td>
                                
                                <td>
                                <a href="mfeedback.php?delete=<?php echo $row['id'] ?>" class='btn bg-dark btn-sm' data-toggle='tooltip' title="Delete this Message" style="color: red;border:1px solid red">Delete</a>
                                </td>
                                
                            </tr>
                            <?php
                                }
                            }
                            else{
                                echo "No Feedbacks.";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>