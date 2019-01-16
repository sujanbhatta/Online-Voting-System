<?php 
	include 'connection/auth.php';
?>
<?php
session_start();
include('connection/connect.php');
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	if ($image_size==FALSE) {
		
		?>
			<script type="text/javascript">
				alert("That's not an image!");
				window.location = 'voterinfo.php';
			</script>
		<?php
			
	}else{
		move_uploaded_file($_FILES["image"]["tmp_name"],"voterimg/" . $_FILES["image"]["name"]);

		$location=$_FILES["image"]["name"];
$a = $_POST['idnum'];
$b = $_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
$c = $_POST['dob'];
$d = $_POST['address'];
$e = $_POST['father'];
$f = 'notRegistered';


// query
$sql = "INSERT INTO voter_list (nid,name,dob,address,father,status,img) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$location));
header("location: voterinfo.php");
}
?>