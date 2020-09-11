<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 
<script src="jquery/jquery.min.js"></script>

<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>	

<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</head>


 <style>
#aa {
	color:#FFF;
	font-size:medium;
	font-weight:bold;  
	  
  }
  
#aa:hover {
	
list-style-type:none;
text-decoration:none;	
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
                        <a href="#"  id="aa" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
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
		

			<div>
		<h3  align="center" style="background-color:#006;color:#FFF;">My Appoinment</h3>
		
		
	</div>
            
				<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table align='center' border='2' width='90%' style='background-color:#006;color:#fff;'>
							<tr>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>My Disease Type</div></th>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>My Doctor</div></th>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>My Contact</div></th>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>My Email</div></th>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Appoinment Date</div></th>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Time<div></th>
			<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Action</div></th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr align='center' style='height:50px;'>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
						        echo "<td>".$row['email']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['time']."</td>";
						
								echo "<td>
								
								<a href='#edit_".$row['booking_id']."' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
			 <a href='#delete_".$row['booking_id']."' style='' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span>Cancil</a>
								
								
								
								
								</td>";
								include('delete_Appoinment_modal.php');
								include('edit_Appoinment_modal.php');

						
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>

					<!-- Cancel Booking -->


			

	<!-- Cancel Booking End-->
			</div>
		
	
	
	

	


	
	</div><!--  containerFluid Ends -->






 
					
	<footer>
  
<div class="row" align="center">



<div class="col-sm-12 col-lg-12 col-md-12" style="margin-top:15px;font-size:medium;">

<p>© Copyright 2020 | CareGroup | All Rights Reserved</p>

</div>





</div>

</footer>


	
</body>
</html>
