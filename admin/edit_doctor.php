<?php
	session_start();
	include_once('config.php');
	
		

	if(isset($_POST['edit'])){
		$doc_id = $_POST['doc_id'];
		$name = $_POST['name'];
		$city = $_POST['city'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$Qualification = $_POST['Qualification'];
		$expertise = $_POST['expertise'];
		$fee= $_POST['fee'];
		$sql = "UPDATE doctor SET name = '$name', city = '$city', contact = '$contact', email ='$email', Qualification='$Qualification', expertise='$expertise', fee='$fee'    WHERE doc_id = '$doc_id'";

				
						if($conn->query($sql)){
			$_SESSION['success'] = 'Doctor updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
			
		
	
	}
	
header('location: viewDoctor.php');
?>