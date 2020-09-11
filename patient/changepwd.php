<?php if(!isset($_SESSION)){
	session_start();
	
	
	
	}  
	

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
 	<script src="js/bootstrap.min.js"></script>

</head>


 <style>
#aa {
	color:#FFF;
	font-size:medium;
	font-weight:bold;  
	  
  }
  
#aa:hover {
	
color:#090;	
	
}

footer {
  background-color:#003;
  padding: 10px;
  text-align: center;
  color: white;
  width:100%;
   margin-top:19%;

}

html {
	  scroll-behavior: smooth;
}
	body {
	margin:0px;
	top:0px;
	overflow-x:hidden;
}
  
  </style>
  
	   
    <img src="img/header_img4.jpg" width="100%"> 
<nav class="navbar navbar-inverse" style="border-top: solid #006;background-color:#006;" id="na">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="dashboard.php" id="aa">
      Patient Panel
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    
   
      
      <ul class="nav navbar-nav navbar-right">
         
				<li><a href="search_doctor.php"  id="aa">Search Doctors </a></li>
                				<li><a href="view_booking.php"  id="aa">My Appoinment</a></li>

                               
         <li class="dropdown">
                        <a href="#" id="aa" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="myDetails.php" >My Profile</a></li>

				<li><a href="changepwd.php">Change Password</a></li>

				<li><a href="logout.php">Log Out</a></li>
				
                        </ul>
                    </li>  
				
				
				
			</ul>
	</div>
</div>
</nav>	
<body>


<div class="row" align="center">

<div class="col-lg-12 col-sm-12 col-md-12">	
				<form action="" method="post" class="form-group-lg">
					<label>
						Old Password:<input type="password" class="form-control" name="password"  placeholder="Current password" required>
					</label><br>
					<label>
						new Password:<input type="password" class="form-control" name="newpassword"  placeholder="New password" required>
					</label><br>
					
					<button name="submit" type="submit" class="btn btn-primary">Update Password</button> <br>

					


					<!-- login validation -->
			<?php 
					
							
							include('../config.php');
							if(isset($_POST["submit"])){
							

							$sql= "SELECT * FROM patient WHERE email= '" . $_SESSION["email"]."' AND password= '" . $_POST["password"]."'";

							$query=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($query);

							if($row>0){
								
							
								
								$sql1="UPDATE patient SET password='" . $_POST["newpassword"]  ."' WHERE email='" .$_SESSION["email"] ."'";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								echo "<script>alert('Password Has been Updated');</script>";
								
								}


							else{
								echo "<script>alert('Input Correct Password');</script>";
							}
									
										
								
					}
					
 			?>
		<!-- login validation End-->


				</form> 
				
				</div>
                </div>
				
		
				
			
		





	<script src="js/bootstrap.min.js"></script>

					
	<footer>
  
<div class="row" align="center">



<div class="col-sm-12 col-lg-12 col-md-12" style="margin-top:15px;font-size:medium;">

<p>© Copyright 2020 | CareGroup | All Rights Reserved</p>

</div>





</div>

</footer>


	
 
			



	
</body>
</html>
