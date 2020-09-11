<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>


<!-- for retriving data -->
				<?php 
							include('../config.php');
							$sql="SELECT * FROM doctor where userid='" . $_SESSION["userid"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$city=$data[2];
							$contact=$data[3];
							$email=$data[4];
							$Qualification=$data[5];
							$userid=$data[7];
							$expertise=$data[6];
							$fee=$data[8];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

		<h3 align="center" style="background-color:#006;color:#FFF;">My Details</h3>
			
            <div class="row" align="center">
            <div class="col-lg-12 col-md-12 col-sm-12">
				<form action="" method="post" class="form-group-lg">
				
					<label>
						Your Name: <input type="text" class="form-control" disabled name="name" value="<?php echo $name; ?>" required>
					</label><br>

 					<label>
						City: <input type="text" disabled class="form-control" name="city" value="<?php echo $city; ?>"  required>
					</label><br>

					
					<label>
						Contact: <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>"  required>
					</label><br>
 					<label>
						Email: <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
					</label><br>
                    <label>
						Qualification: <input type="email" disabled class="form-control" name="Qualification" value="<?php echo $Qualification; ?>" required>
					</label><br>
					<label>
						Userid: <input type="text" class="form-control" name="userid" value="<?php echo $userid; ?>"  disabled>
					</label><br>
					<label>
						Expert in: <input type="text" class="form-control" name="expertise" value="<?php echo $expertise; ?>" disabled>
					</label><br>

					<label>
						Fee: <input type="text" class="form-control" name="fee" value="<?php echo $fee; ?>">
					</label><br>
					

					
					
					<button name="submit" type="submit" class="btn btn-primary">UpdateProfile</button> <br>


			</form>
            

	</div>
	
	
</div>


			<!-- update information -->

				<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE doctor SET contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' ,  fee='" .$_POST["fee"]."'    WHERE userid='" . $_SESSION["userid"] . "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->




	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


<?php include('footer.php'); ?>

</body>
</html>
