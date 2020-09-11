<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM patient WHERE id = '".$_GET['id']."'";

		if($conn->query($sql)){
			 echo "<script>alert('Doctor deleted Successfully!');</script>";
				header('location: viewCustomer.php');
 
		}
		//
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
		
		
	
	

?>