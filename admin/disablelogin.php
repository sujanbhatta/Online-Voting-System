<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("UPDATE logintbl SET status='0' WHERE id='$id'");

	$results->execute();
	header('LOCATION:loginbutton.php');
	//for($i=0; $rows = $results->fetch(); $i++){
?>