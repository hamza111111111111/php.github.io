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
		<h3 align="center" style="background-color:#006;color:#FFF;">All registered Doctor List</h3>
		
		
		
			<div align="center">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='2' width='100%' style='background-color:#006;color:#fff;'>
							<tr>
					<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Dr.Id</div></th>

						<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Dr.Name</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>City</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Mobile</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Email</div></th>
																<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Qualification</div></th>

								<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Expert in</th>
								<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Fee</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:x-large;color:#090'>Action</div></th>

							</tr>";
							
							
						while($row=mysqli_fetch_array($result)){
							
							echo "<tr align='center' style='height:90px;'>";
							 echo "<td>".$row['doc_id']."</td>";
							echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['city']."</td>";
                             echo "<td>".$row['contact']."</td>";
                              echo "<td>".$row['email']."</td>";
                               echo "<td>".$row['Qualification']."</td>";
                                echo "<td>".$row['expertise']."</td>";
                              echo "<td>".$row['fee']."</td>";
                                
                                
                                			

								echo "<td>
 <a href='#edit_".$row['doc_id']."' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
			 <a href='#delete_".$row['doc_id']."' style='margin-top:5px;' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
					
								
								
								</td>";
                     			
								
								echo "</tr>";
								include('delete_Doctor_modal.php');
								include('edit_Doctor_modal.php');
						}
						echo "</table>";
						
					} 			
						
					 else{
						print '<p>Sorry, No Data found..!!!</p>';
}

					?>
							
									
						
 
  								
							
						

		</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	







	
</body>
</html>
