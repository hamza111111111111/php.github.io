<?php
	session_start();
	include_once('config.php');
	
		

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$city = $_POST['city'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		
		$sql = "UPDATE patient SET name = '$name', age = '$age', city = '$city', contact = '$contact', email ='$email'   WHERE id = '$id'";

				
						if($conn->query($sql)){
			$_SESSION['success'] = 'Patient updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
			
		
	
	}
	
header('location: viewCustomer.php');
?>