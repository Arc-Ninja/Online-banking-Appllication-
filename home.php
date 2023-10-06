<?php
$conn = new mysqli("localhost", "root", "", "bank");
$resullt = $conn->query("select * from notice");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MAZE BANK </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script></head>
<body style="background: url(images/135.jpg); background-size: 100%;">
    
	<nav class="navbar navbar-expand-sm navbar-light" style="background-color: rgb(153, 0, 0);">
	  <div class="container-fluid ">
	  <img src="images/logo.jpg" style="height: 5vh;width: 5vh;"/><a class="navbar-brand " href="#" style="color: white; text-shadow: 2px 2px rgb(255, 51, 51); font-size: 40px; font-family: 'Times New Roman', Times, serif;margin-left: 2vh;font-weight:bold">  MAZE BANK</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
		  <ul class="navbar-nav ms-auto">
			
            <li class="nav-item">
				<button type="button" class="btn btn-danger" style="background-color:red; margin-right: 15px; margin-left: 20px;margin-top: 3px;border: 2px solid white;"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
			</li>
			<li class="nav-item">
				<button type="button" class="btn btn-danger" style="background-color:red; margin-top: 3px; border: 2px solid white;"><a href="userregistration.php" style="text-decoration: none; color: white;">Registration</a></button>
			</li>
		  </ul>		  
		</div>
	  </div>
	</nav>

<div class="container" style="display: flex;">
	<div class="col-lg-8 order-1 order-sm-1 order-md-1 order-lg-2 pr-0 pr-mob-grid" style="margin-top: 10vh; margin-left: 10vh; flex:1"><picture data-fileentryid="525059">
                <img class="img-fluid boder-img product-detail-banner" alt="About us" title="About us" data-fileentryid="525059" src="images/maze.jpg">
               </picture>
              </div>



	
            <div class="card  col-md-7 mx-auto" style="border: 2px solid red; background-color:rgb(153, 0, 0); margin-top:10vh; width:70vh;">
            <div class="card-header text-center" style="background-color:rgb(153, 0, 0); color:aliceblue;">
              Notice
            </div>
            <div class="card-body" style="padding: 0;">
			<table class="table table-bordered table-sm" style="margin:0; font-size:20px" >
						
                <?php
				$i=0;
				if($resullt->num_rows>0){
					while($data=$resullt->fetch_assoc()){
						$i++;
						?>
					
					<tbody style="border: 1px solid black; background-color:rgb(252, 210, 210); color:black">
						<tr>
							<td><?php echo $i."."; ?></td>
							<td><?php echo $data['mssg']; ?></td>
						</tr>
					</tbody>
					

				<?php
					}
				}
				else{
					?>
					<tbody style="border: 1px solid black; background-color:rgb(252, 210, 210); color:black">
						<tr>
							<td>NO NOTICE FROM BANK!</td>
							
						</tr>
					</tbody>
					<?php
				}
				?>
				</table>
			</div>
			</div>         
  
</div>
	



</body>
</html>