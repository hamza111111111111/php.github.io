<?php session_start();  ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- online-fonts -->


 




</head>

<style>



</style>

<body>


<div class="header-w3l">
<a href="index.php" style="color:#009;font-weight:bold;font-size:x-large;">Back to Home</a>

		<h1>Patient Login</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<h2>Login Here</h2>
			<form action="#" method="post">
				<div class="pom-agile">
					<span class="fa fa-user" aria-hidden="true"></span>
					<input placeholder="E-mail" name="email" class="user" type="email" required="">
				</div>
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Password" name="password" class="pass" type="password" required="">
				</div>
				<div class="sub-w3l">
					<div class="sub-agile">
											</div>
					<a href="patient_regi.php">Dont have a account Signup Now?</a>
					<div class="clear"></div>
				</div>
				<div class="right-w3l">
               <input type="submit" name="submit" value="Login">

				</div>
			</form>
            
            			<!-- login validation -->
			<?php 
					$_SESSION['patient']="";
							
							include('config.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('patient/dashboard.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>

            
		</div>
	</div>
    
   
 





	

		

 
			



	
</body>
</html>

