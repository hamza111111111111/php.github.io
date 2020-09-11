<?php
	session_start();
	include_once('config.php');
	
	
	
	
		

	if(isset($_POST['edit'])){
		$booking_id	 = $_POST['booking_id'];
		$pcontact = $_POST['pcontact'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$sql = "UPDATE booking SET  pname='$pname', pcontact='$pcontact', email='$email', date='$date', time='$time'   WHERE booking_id = '$booking_id'";





				
						if($conn->query($sql)){
			$_SESSION['success'] = 'appoinment updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
			
		
	
	}
	
header('location: view_booking.php');




















?>