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
 

		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	
 
#aa {
	color:#FFF;
	font-size:large;
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
  margin-top:15%;
}
html {
	  scroll-behavior: smooth;
}
	body {
	margin:0px;
	top:0px;

}


  </style>








<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
		
		   

	 ?>
     
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
      Admin Panel
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    
   
      
      <ul class="nav navbar-nav navbar-right">
         
			
				
				
				<li><a href="addDoctor.php" id="aa">Add Doctor</a></li>
				<li><a href="viewDoctor.php" id="aa">View Doctor</a></li>
				<li><a href="viewCustomer.php" id="aa">View Patient</a></li>
				<li><a href="viewAppoinment.php" id="aa">View Appoinment</a></li>
                <li><a href="viewcontact.php" id="aa">View Contact</a></li>
                
                
         <li class="dropdown">
                        <a href="#" id="aa" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">


				<li><a href="logout.php">Log Out</a></li>
				
                        </ul>
                    </li> 
                
			</ul>
	</div>
</div>
</nav>	


