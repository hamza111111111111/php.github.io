<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>


<style>
body {
	background-image:url(img/image_4.jpg);
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:cover;
	background-position:top;
	height:700px;width:100%;
	
	margin:0px;
	top:0px;
	overflow-x:hidden;
}

@media only screen and (max-width: 900px) {
  body {
    background-image:none;
	background-color:#006;
  }
  #c {
  color:#FFF;
  
  }
  
  
  
}








</style>

<body>


	<!-- this is for donor registraton -->
	<div class="row" align="center">
    
        <div class="col-sm-8 col-lg-8 col-md-8">
</div>

    <div class="col-sm-4 col-lg-4 col-md-4">

		<form enctype="multipart/form-data" method="post" class="form-group"  style="margin-top:50px;">	
        			  <h1 align="center" id="c">Sign Up</h1>

<label>
<div align="left" id="c">Your Name:</div><input type="text" class="form-control" name="name" value="" placeholder="Full name" required>
</label><br>

<label>
<div align="left" id="c">Age:</div><input type="number" name="age" class="form-control"  placeholder="age" pattern="[0-9]{2,2}"title="please enter only  numbers between 2 to 2 for age" required/>
</label><br>
					
<label>	
<div align="left" id="c">Contact No:</div><input type="number" name="contact" class="form-control"  placeholder="contact no"  pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/ required>
</label><br>
 					
 <label>
<div align="left" id="c">City:</div><input type="text" name="city" class="form-control" value="" placeholder="City"required></label><br>
					
<label>
<div align="left" id="c">Email:</div><input type="email" name="email" class="form-control"  value="" placeholder="email" required>
</label><br>

<label>
<div align="left" id="c">Password:</div><input type="password" class="form-control" name="password"  value="" placeholder="password" required>
</label><br>
					
<button name="submit" type="submit" class="btn btn-danger">Register</button>


</form>
<a href="patient_login.php" class="btn btn-primary">Already have an account? Sign in</a>

			</div>




	</div>
	
	


	

 





  


	<script src="js/bootstrap.min.js"></script>

	 <!-- validation and insertion -->


				<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO patient (name,age,contact,city,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["city"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
					            echo "<script>alert('Thankyou for your registration, Login to continue!');</script>";

							    echo "<script>location.replace('patient_login.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 



	<!-- validation and insertion End-->



</body>
</html>