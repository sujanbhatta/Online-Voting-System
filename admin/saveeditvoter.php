<?php 
	include 'connection/auth.php';
?>
<?php
// configuration
include('connection/connect.php');

// new data
$id = $_POST['vid'];
$a = $_POST['nid'];
$b = $_POST['name'];
$c=$_POST['dob'];
$d=$_POST['address'];
$e=$_POST['father'];
$f=$_POST['status'];
// query
$sql = "UPDATE voter_list
        SET nid=?, name=?, dob=?,address=?,father=?,status=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: voterinfo.php");

?>