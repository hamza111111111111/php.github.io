<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['user_id'])){
		$sql = "DELETE FROM contactus WHERE user_id = '".$_GET['user_id']."'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Contact deleted successfully';
		}
		//
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	

	header('location: viewcontact.php');
?>