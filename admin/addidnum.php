<?php 
	include 'connection/auth.php';
?>
<form action="saveidnum.php" method="POST" enctype="multipart/form-data">
NID<br>
<input type="text" name="idnum" value="" required="required" /><br>
Firstname<br>
<input type="text" name="fname" value="" required="required" /><br>
Lastname<br>
<input type="text" name="lname" value="" required="required" /><br>
Middlename<br>
<input type="text" name="mname" value="" /><br>
DOB<br>
<input type="date" name="dob" value="" /><br>
Address<br>
<input type="text" name="address" value="" /><br>
Father Name<br>
<input type="text" name="father" value="" /><br>
Image<br>
<input type="file" name="image" class="ed" required><br />
<input type="submit" value="Save" />
</form>