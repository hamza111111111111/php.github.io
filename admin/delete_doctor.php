<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['doc_id'])){
		$sql = "DELETE FROM doctor WHERE doc_id = '".$_GET['doc_id']."'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Doctor deleted successfully';
		}
		//
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	

	header('location: viewDoctor.php');
?>