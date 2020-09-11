<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>


<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>



	<!-- this is for donor registraton -->
	<div>
		<h3  align="center" style="background-color:#006;color:#FFF;">Patient Who taken Appoinment</h3>
		
		
	</div>
		
			<div align="center">
				<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM booking";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='2' align='center' width='100%' style='background-color:#006;color:#fff;'>
							<tr>
								
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Dr.Name</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>D.Contact</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Expert in</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Fee</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>P.Name</div></th>

				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>P.Contact</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>P.Email</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>P.Address</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>P.City</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Date</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Time</div></th>
				<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Action</div></th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr align='center' style='height:90px;width:100px;'>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dcontact']."</td>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['fee']."</td>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['Address']."</td>";
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['time']."</td>";
								echo "<td>
								
								 <a href='#edit_".$row['booking_id']."' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
			 <a href='#delete_".$row['booking_id']."' style='margin-top:5px;' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
								
								
								</td>";
								
								
								echo "</tr>";
								include('delete_Appoinment_modal.php');
								include('edit_Appoinment_modal.php');
						}
						
						echo "</table>";
					}
					else{
						print '<p>Sorry, No Data found..!!!</p>';
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->






 
			



	
</body>
</html>
