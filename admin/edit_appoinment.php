<?php
	session_start();
	include_once('config.php');
	
	
	
	
		

	if(isset($_POST['edit'])){
		$booking_id	 = $_POST['booking_id'];
		$dname = $_POST['dname'];
		$dcontact = $_POST['dcontact'];
		$expertise = $_POST['expertise'];
		$fee= $_POST['fee'];
		$pname = $_POST['pname'];
		$pcontact = $_POST['pcontact'];
		$email = $_POST['email'];
		$Address= $_POST['Address'];
		$city = $_POST['city'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$sql = "UPDATE booking SET dname = '$dname',  dcontact = '$dcontact', expertise='$expertise', fee='$fee', pname='$pname', pcontact='$pcontact', email='$email', Address='$Address', city='$city', date='$date', time='$time'     WHERE booking_id = '$booking_id'";





				
						if($conn->query($sql)){
			$_SESSION['success'] = 'appoinment updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
			
		
	
	}
	
header('location: viewAppoinment.php');




















?>