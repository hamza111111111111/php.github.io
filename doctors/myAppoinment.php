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


		<h3 align="center" style="background-color:#006;color: #fff;">Today's Appoinment</h3>
        
		 <div class="row" align="center">
            <div class="col-lg-12 col-md-12 col-sm-12">
		
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM booking WHERE userid='".$_SESSION["userid"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='2' width='100%' style='background-color:#006;color:#fff;'>
							<tr>
						
	<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Patient Name<div></th>
	<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Contact<div></th>
	<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>E-mail<div></th>
		<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Address<div></th>

   <th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>City<div></th>
    <th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Fee<div></th>
	<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Date<div></th>
    <th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Time<div></th>
	<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Action<div></th>

							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr align='center' style='height:70px;'>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['Address']."</td>";
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['fee']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['time']."</td>";
								
								echo "<td>
								
								<a href='#edit_".$row['booking_id']."' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
			 <a href='#delete_".$row['booking_id']."' style='' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span>Delete</a>
								
								
								
								
								</td>";
								
								
								echo "</tr>";
			            include('delete_Appoinment_modal.php');                         
						include('edit_Appoinment_modal.php');


								
								
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			
		
	</div>
    </div>
	
	

	


	
	



	<script src="js/bootstrap.min.js"></script>


 <?php include('footer.php'); ?>
		



	
</body>
</html>
