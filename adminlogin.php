<?php session_start();  ?>

<!DOCTYPE html>
<html>
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
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
	
</head>
<body>



<div class="header-w3l">
<a href="index.php" style="color:#009;font-weight:bold;font-size:x-large;">Back to Home</a>

		<h1>Admin Login</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<h2>Login Here</h2>
			<form action="#" method="post">
				<div class="pom-agile">
					<span class="fa fa-user" aria-hidden="true"></span>
					<input placeholder="Email" name="admin_email" type="email" class="user" required="">
				</div>
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Password" name="admin_password" class="pass" type="password" required="">
				</div>
				<div class="sub-w3l">
					<div class="sub-agile">
											</div>
					<div class="clear"></div>
				</div>
				<div class="right-w3l">
               <input type="submit" name="submit" value="Login">

				</div>
			</form>
            





					

					<!-- login validation -->
			<?php 
							$_SESSION['adminstatus']="";
							include('config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM admin WHERE admin_email= '" . $_POST["admin_email"]."' AND admin_password= '" . $_POST["admin_password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["admin_email"]= $_POST["admin_email"];
											
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('admin/dashboard.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				
				
			</div>
            </div>
           
				
			
		

	


<div class="footer">
		<p>&copy; 2020 CareGroup. All rights reserved.
		</p>
	</div>
	<!--//foote
 
			



	
</body>
</html>

