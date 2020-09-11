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
				<li><a href="view_booking.php"  id="aa">View Appoinment</a></li>
				<li><a href="changepwd.php"  id="aa">Change Password</a></li>
				<li><a href="logout.php"  id="aa">Log Out</a></li>
					
				
				
			</ul>
	</div>
</div>
</nav>	


<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							        $fee = $row["fee"];
									 $userid = $row["userid"];
							    }
							}
							
							$conn->close();

					?>
					<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h3 align="center" style="background-color:#006;color:#FFF;">Book Appoinment</h3>
			
            <div class="row" align="center">
            <div class="col-sm-12 col-lg-12 col-md-12" style="font-size:medium;">

				<form action="" method="post" class="form-group" enctype="multipath/form-data">
					

					<label>
						Dr. Name: <input type="text" name="dname" class="form-control" value="<?php echo $name; ?>" >
					</label><br>

 					<label>
						Contact: <input type="text" name="dcontact" class="form-control" value="<?php echo $contact; ?>" />
					</label><br><br>
 					
					<label>
						Category: <input type="text" name="expertise" class="form-control" value="<?php echo $expertise; ?>" >
					</label><br>

					<label>
						Fee: <input type="text" name="fee" class="form-control" value="<?php echo $fee; ?>" >
					</label><br>
					<label>
						Your Name: <input type="text" class="form-control" name="pname" value="">
					</label><br>

 					<label>
						 Contact: <input type="text" class="form-control" name="pcontact" value=""/>
					</label><br>
					<label>
						 E-mail: <input type="email" class="form-control" name="email" value=""/>
					</label><br>
 					<label>
						 Address: <input type="text" class="form-control" name="Address" value=""/>
					</label><br>
					<label>
						 City: <input type="text" class="form-control" name="city" value="">
					</label><br>
					<label>
						 Date: <input type="date" class="form-control" name="date" value="">
					</label><br>
					<label>
						 Time: <select name="time" class="form-control" required>
										<option disabled selected hidden>Time</option>
										<option value="5:00pm">5:00pm</option>
										<option value="6:00pm">06:00pm</option>
                                        <option value="7:00pm">07:00pm</option>
                                        <option value="8:00pm">08:00pm</option>
                                        <option value="9:00pm">09:00pm</option>
                                        <option value="10:00pm">10:00pm</option>
									</select>
					</label><br>
					
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br>
					
					<button name="submit" type="submit" class="btn btn-primary">Confirm</button> 
					<a href="search_doctor.php" class="btn btn-primary">Cancel</a> <br>


				</form> 

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,Address,city,date,time)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "', '". $_POST["Address"] . "', '". $_POST["city"] . "','". $_POST["date"] . "','". $_POST["time"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 

				<!-- confirming booking -->

	
	


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>

				
	<footer>
  
<div class="row" align="center">



<div class="col-sm-12 col-lg-12 col-md-12" style="font-size:medium;">

<p>© Copyright 2020 | CareGroup | All Rights Reserved</p>

</div>





</div>

</footer>	
</body>


</html>
 


	
</body>
</html>
