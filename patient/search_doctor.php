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


<?php

// if($_SESSION['donorstatus']==""){
// 	header("location:../userlogin.php");
// }

?>


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



<div class="row" align="center">

<div class="col-lg-4 col-md-4 col-sm-4">
</div>


<div class="col-lg-4 col-md-4 col-sm-4">
	
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label><span class="fa fa fa-map-marker"></span>Search By Location:</label>
					</span><select name="city" type="text" class="form-control" style="width:"/>
												<option disabled selected hidden>-City-</option>
												<option>Karachi</option>
												<option>Lahore</option>
												<option>Islamabad</option>
												<option>Peshawar</option>
                                                <option>Quetta</option>


												
											</select>
<br>

					<!-- testing end-->

					<label><span class="fa fa fa-location-arrow"></span>Specialist: </label>
                    <select  name="expertise" type="text" class="form-control" style="width:" />
												
                                                
										<option disabled selected hidden>-Expert in-</option>
										<option>General Physician</option>
										<option>Heart Specialist</option>
                                        <option>Dentist</option>
                                        <option>Eye Specialist</option>
                                        <option>HomeoPathic</option>
                                        <option>Child Specialist</option>

                                        
										
                                        
                                        
                                        
											</select><br>

			<button name="submit" type="submit" class="btn btn-primary"><span class="fa fa fa-search"></span>Search</button>
					
					
					</form>


</div>

<div class="col-lg-4 col-md-4 col-sm-4">
</div>


</div>







					
	<footer>
  
<div class="row" align="center">



<div class="col-sm-12 col-lg-12 col-md-12" style="margin-top:15px;font-size:medium;">

<p>© Copyright 2020 | CareGroup | All Rights Reserved</p>

</div>





</div>

</footer>	




</body>
</html>