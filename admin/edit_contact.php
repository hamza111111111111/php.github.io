<?php
	session_start();
	include_once('config.php');
	
		

	if(isset($_POST['edit'])){
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$email = $_POST['email'];	
		$message = $_POST['message'];
		
		$sql = "UPDATE contactus SET username = '$username',email ='$email', message='$message'    WHERE user_id = '$user_id'";

				
			
			if($conn->query($sql)){
			$_SESSION['success'] = 'User updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
		
	
		
		
	
	
	
header('location: viewcontact.php');
?>