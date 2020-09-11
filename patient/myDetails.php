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




	<body>		
    
    
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



<!-- for retriving data -->
				<?php 
							include('../config.php');
							$sql="SELECT * FROM patient where email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$age=$data[2];
							$city=$data[3];
							$contact=$data[4];
							$email=$data[5];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<div>
				<form action="" method="post" class="text-center form-group-lg">
					<label>
						Your Name: <input type="text" disabled  name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Full name" required>
					</label><br>

					<label>
						Age: <input type="number" name="age" disabled class="form-control"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br>
					<label>
						Mobile: <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br>
 					
 					<label>
						City: <input type="text" class="form-control" name="city" value="<?php echo $city; ?>" placeholder="City" required>
					</label><br>
						

					<label>
						Email: <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="email" required>
					</label><br>
					
					
					
					<button name="submit" type="submit" class="btn btn-primary">UpdateProfile</button> <br>


			</form> 
				
				

				
		
				
			
		
	</div>
	
	
</div>
<br><br><br>

			<!-- update information -->

				<?php
							include('config.php');
							if(isset($_POST['submit'])){
							

							$sql="UPDATE patient SET  contact='" .$_POST["contact"]. "',city='" .$_POST["city"]. "', email='".$_POST["email"]."' WHERE email='" .$_SESSION["email"]. "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


 
 
 <footer>
  
<div class="row" align="center">



<div class="col-sm-12 col-lg-12 col-md-12" style="margin-top:15px;font-size:medium;">

<p>© Copyright 2020 | CareGroup | All Rights Reserved</p>

</div>





</div>

</footer>	



</body>
</html>
