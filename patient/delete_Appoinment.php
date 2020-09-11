<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['booking_id'])){
		$sql = "DELETE FROM booking WHERE booking_id = '".$_GET['booking_id']."'";

		if($conn->query($sql)){
			 echo "<script>alert('Appoinment deleted Successfully!');</script>";
				header('location: view_booking.php');
 
		}
		//
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
		
		
	
	

?>