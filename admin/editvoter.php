<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("SELECT * FROM voter_list WHERE id= :voterid");
	$results->bindParam(':voterid', $id);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
?>
<form action="saveeditvoter.php" method="POST">
<input type="hidden" name="vid" value="<?php echo $id; ?>" />
NID<br>
<input type="text" name="nid" value="<?php echo $rows['nid']; ?>" required/><br>
Name<br>
<input type="text" name="name" value="<?php echo $rows['name']; ?>" required/><br>
DOB<br>
<input type="date" name="dob" value="<?php echo $rows['dob']; ?>" required/><br>
Address<br>
<input type="text" name="address" value="<?php echo $rows['address']; ?>" required/><br>
Father Name<br>
<input type="text" name="father" value="<?php echo $rows['father']; ?>" required/><br>
Status<br>
<input type="text" name="status" value="<?php echo $rows['status']; ?>" readonly="readonly"><br>
<input type="submit" value="Save" />
<?php
}
?>