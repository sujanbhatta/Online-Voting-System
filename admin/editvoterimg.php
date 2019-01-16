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
<img src="voterimg/<?php echo $rows['img']; ?>" width="250px;" />
<form action="savevoterimg.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="vid" value="<?php echo $id; ?>" /><br>
Picture: <br />
<input type="file" name="image" class="ed" required><br />
<input type="submit" name="savePhoto" value="Save" id="editPhoto" />
</form>
<?php
}
?>
