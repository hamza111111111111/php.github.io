<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>



<div class="row" align="center" style="background-image:url(img/header_img.jpg);
	background-position:top;
	background-size:cover;
    background-attachment:scroll;
	position:relative;
    width:-102%;
	height:700px;
	background-repeat:no-repeat;
    border:2px solid #006;">

			 <div class="col-md-6" style="margin-top:80px;" align="center">
<form enctype="multipart/form-data" action=""  method="post" class="form-group" style="margin-left: 110px">
			 
				  	
			 		
					<label>
					    <input type="text" name="name" required class="form-control" value="" placeholder="Full name" autocomplete="on">
					</label><br><br>
                    <label>
					 <select name="city" type="text" class="form-control" style="width:"/>
												<option disabled selected hidden>-City-</option>
												<option>Karachi</option>
												<option>Lahore</option>
												<option>Islamabad</option>
												<option>Peshawar</option>
                                                <option>Quetta</option>


												
											</select>
</label><br><br>
					<label>
						 <input type="text" name="contact" required class="form-control" value="" placeholder="contact" >
					</label><br><br>

					<label>
						 <input type="email" name="email" required class="form-control"  value="" placeholder="email" >
					</label><br><br>
					<label>
                     <input type="text" name="Qualification" required class="form-control"  value="" placeholder="Qualification" >
					</label><br><br>
					
                    
                    
					<label>
                   
						 <select name="expertise" class="form-control" required>
                         
										<option disabled selected hidden>-Expert in-</option>
										<option>General Physician</option>
										<option>Heart Specialist</option>
                                        <option>Dentist</option>
                                        <option>Eye Specialist</option>
                                        <option>HomeoPathic</option>
                                        <option>Child Specialist</option>
										</select>
					</label><br><br>
					<label>
					     <input type="text" required class="form-control" name="userid" value="" placeholder="userid" >
					</label><br><br>
					<label>
					   <input type="text" required class="form-control" name="fee" value="" placeholder="Fee" >
					</label><br><br>
					<label>
					   <input type="password" required name="password" class="form-control" value="" placeholder="password" >
					</label><br><br>
					
					<button name="submit" type="submit" class="btn btn-primary">Add Doctor</button> <br>
				
			


				</form>
		
			</div>

			 <div class="col-md-6">
                

	</div>
    </div>
	
		<!-- inserting data -->
					<?php  
						 if(isset($_POST['submit'])){
							
									include('../config.php');
									$sql1 = "SELECT * FROM doctor WHERE userid='".$_POST["userid"]."' OR email= '" . $_POST["email"] . "' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Userid or E-mail already exist!');</script>";
	              					}
	              					else{
									$sql = "INSERT INTO doctor (name,city,contact,email,Qualification,expertise,userid,fee,password)
										VALUES ('" . $_POST["name"] . "','" . $_POST["city"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["Qualification"] . "', '" . $_POST["expertise"] . "',  '" . $_POST["userid"] . "','" . $_POST["fee"] . "','" . $_POST["password"] . "' )";

										if ($conn->query($sql) === TRUE) {
										    echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
										} else {
										    echo "<script>alert('There was an Error')<script>";
										}
									}

									$conn->close();
							
						}
							
							
						
				
				?>
					<!-- inserting data -->

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


<?php include('footer.php'); ?>
