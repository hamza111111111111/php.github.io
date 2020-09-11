<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
</head>
<body>

<div class="limiter">

		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
              
				<form class="login100-form validate-form" method="post">
                
                <div align="center" style="margin-top:-180px;margin-left:50px;">
<a href="index.php" style="color:#009;font-weight:bold;font-size:x-large;">Back to Home</a>

		<h1 style="font-weight:bold;color:#FFF;">Doctor Login</h1>
	</div>
					
					
					<div class="wrap-input100 validate-input m-b-10" style="margin-top:-60px;" data-validate = "Username is required">
						<input class="input100" type="text" name="userid" placeholder="UserId">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>
                    
                    
					<!-- login validation -->
			<?php 
			
							$_SESSION['adminstatus']="";
							
							include('config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('doctors/dashboard.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End--

					

				
				</form>
                
	<div class="row" align="center" style="margin-top:200px;">
    <div class="col-md-12">
		<p style="color:#fff;">&copy; 2020 CareGroup. All rights reserved.
		</p>
	</div>
    </div>
    </div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>






>

	
												
 			
		<!-- login validation End-->


				
				
			
           
				
			
		



	







	





	
</body>
</html>

