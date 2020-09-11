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
	margin-top:2%;
	font-size:medium;
	font-weight:bold;
	color:#FFF;
	  
  }
  
#aa:hover {
	
text-decoration:none;
list-style-type:none;
	
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
      <a class="navbar-brand" data-toggle="tooltip" title="Patient Panel" href="dashboard.php" id="aa">
      Patient Panel
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    
   
      
      <ul class="nav navbar-nav navbar-right">
         
			<li><a href="search_doctor.php"  id="aa">Search Doctors </a></li>
				<li><a href="view_booking.php"  id="aa">View Appoinment</a></li>
				
                
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




		<h3 class="text-center" style="background-color:#006;color: #fff;padding: 5px;">Search result</h3>
		
	
    
     
<!-- result -->

					<?php 
					include('../config.php');
					

	$sql = " SELECT * FROM doctor WHERE city = '" . $_POST["city"]."' AND expertise = '" . $_POST["expertise"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						
						
						echo "  <div style='width:100%;'> <marquee direction='left' scrollamount='10'><h2 style='color:#009;'><i>Available Monday to Saturday 5:00pm to 11:00pm</i></h2></marquee></div><br>
						<div style='width:100%;'>
               <marquee direction='right' scrollamount='7'><h2 style='color:#009;'><i><b>Sunday Off</b></i></h2></marquee>
			   </div>
 

						
						
						
						
						
						<table align='center' border='2' width='90%' style='background-color:#006;color:#fff;'>
							<tr>
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Dr.Id</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Name</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>City</div></th>
								
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Mobile</div></th>
								
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Email</div></th>
							<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Qualification</div></th>

								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Expert in</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Fee</div></th>
								<th><div align='center' style='font-wieght:bold;font-size:large;color:#090'>Action</div></th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr align='center' style='height:50px;'>";
								echo "<td>".$row['doc_id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['city']."</td>";
					
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
                                 echo "<td>".$row['Qualification']."</td>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['fee']."</td>";
						?>
<td align="center"><a id="aa" class="btn btn-primary" href="booking.php?doc_id=<?php echo $row['doc_id'] ?>">Book</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
					<!-- result -->

<div align="center">
	<a class="btn btn-primary" href="search_doctor.php" id="aa">Search Again</a>
	</div>


	
	</div><!--  containerFluid Ends -->




					
	<footer>
  
<div class="row" align="center">



<div class="col-sm-12 col-lg-12 col-md-12" style="margin-top:15px;font-size:medium;">

<p>© Copyright 2020 | CareGroup | All Rights Reserved</p>

</div>





</div>

</footer>	
<script src="js/bootstrap.min.js"></script>


 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


	
</body>
</html>
