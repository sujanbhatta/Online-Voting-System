<?php
	require_once('auth.php');
	include('admin/connection/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta data -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is a online voting website in Nepal. We are providing easiest online service for election." >
	<meta name="keywords" content="Online voting system, electronic voting system, electronic voting system in Nepal" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Sujan Bhatta">
	
	<!-- style sheets -->
	<link rel="stylesheet" type="text/css" href="admin/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="admin/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="admin/css/normalize.css" media="all">
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	<link rel="stylesheet" type="text/css" href="process.css" media="all">
	
	<!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Diplomata+SC" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  	
	

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
	
	
	<title>EVS | Electronic Voting System</title>
	<script type="text/javascript">
	  jQuery(document).ready(function($) {
	    $('a[rel*=facebox]').facebox({
	      loadingImage : 'admin/images/loading.gif',
	      closeImage   : 'admin/images/closelabel.png'
	    })
	  })
	</script>
</head>
<body>
	<!-- header-area starts -->
	<div class="header-area"> 
		<div class="logo-menu">
			<div class="container"> 
				<div class="row ">
					<div class="logo-area col-md-2"> 
						<a href="index.php"><img src="images/headerlogo.jpg" style="height:40px; width:50px;"><b><p style="color:black;">Electronic Voting System</p></a>

					</div>
					<div class="menu col-md-offset-1 col-md-7"> 
						<ul>
							<li ><a href="index.php">Home</a></li>
							<li><a href="">About</a>
                            <ul>
                            <li><a href="about.php">Overview</a>
                            </li>
                            <li><a href="laws.php">Laws and Procedure</a></li>
                            </ul>
								
							</li>
							<li><a href="voting.php">Vote</a></li>
							<li><a href="register.php">voter registration</a> 
								
							</li>
							
							<li><a href="result.php">result</a></li>
						</ul>
					</div>
										
					<div class="input-group search col-md-2">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Go</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- header-area ends -->
	
	<!-- content-area starts -->
	
				<div class="col-md-12 middle-area"> 
					<div class="content"> 
					<h1 class="text-capitalize text-center" style="margin-top:40px;"><b>electronic voting system</h1></b>
						


<style class="csscreations">

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	background: #ffffff;
}
body {
	font-family: montserrat, arial, verdana;
}
#msform #submit {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
	font-size: 14px;
}
#msform #submit:hover, #msform #submit:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
#msform a{
	text-decoration: none;
	padding: 10px 22px !important;
}
#msform {
	width: 500px;
	margin: 25px auto;
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	text-align: left;
	-moz-box-sizing: border-box;
}
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
	margin-top: 10px;
}
#logo {
	margin: 25px auto;
	width: 500px;
}
#logo img {
	float: left;
}
.clearfix {
	clear: both;
}
#logo span {
	display: inline-block;
    font-size: 17px;
    vertical-align: middle;
	margin-top: 34px;
	color: #000000;
}
</style>
</head>
<body>

<form id="msform" action="vote.php" method="Post">
<input type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID'] ?>" name="idnum" />
<?php
$resultasa = $db->prepare("SELECT * FROM position");
$resultasa->execute();
for($i=0; $rowasa = $resultasa->fetch(); $i++){
$exrxrxrx=$rowasa['name'];
$candidate = str_replace(" ", "", $exrxrxrx);

// if ($exrxrxrx!='Senator') {
?>
<h2 class="fs-title"><?php echo $exrxrxrx ?></h2>
<input type="hidden" value="<?php echo $_POST[$candidate] ?>" name="votes[]" />
<p style="color: #c0392b"><?php echo $_POST[$candidate]; ?></p><br>
<?php
// }
/*
if ($exrxrxrx=='Senator') { 
?>
<h2 class="fs-title"><?php echo $exrxrxrx ?></h2>
<?php
$edittable=$_POST['votes'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
?>
<input type="hidden" value="<?php echo $edittable[$i] ?>" name="votes[]" /><?php echo $edittable[$i] ?><br>
<?php
}
?>
<?php
} */
}
?>
<a href="candidates_list.php" id="submit">Cancel</a>
<input type="submit" value="Submit" id="submit">

</form>
				
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- content-area ends -->
	
	
	<!-- question-area starts -->
	<div class="question-area"> 
		<div class="container"> 
			<div class="row"> 
				
			</div>
		</div>
	</div>
	<!-- question-area ends -->
	
	
	
	
	<div class="footer-area1"> 
		<div class="container"> 
			<div class="footer-menu"> 
				<ul class="text-capitalize list-inline text-center">
					<li><a href="index.php">home</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="about.php">about us</a></li>
					<li><a href="faq.php">help</a></li>
					<li><a href="laws.php">terms & codition</a></li>
					<li><a href="#">privacy</a></li>
				</ul>
			</div>
			<div class="social-area text-center"> 
				<ul class="list-unstyled list-inline">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					
				</ul>
				<!-- <nav class="social-icons text-center"> -->
					<!-- <ul class="text-center"> -->
						<!-- <li class="twitter"><a href="#"></a></li> -->
						<!-- <li class="facebook"><a href="#"></a></li> -->
						<!-- <li class="google-plus"><a href="#"></a></li> -->
						<!-- <li class="linkedin"><a href="#"></a></li> -->
					<!-- </ul> -->
				<!-- </nav> -->
				<p style="color:white;">EVS_EC_NP &copy;  2018 &nbsp; |&nbsp; All rights reserved.</p>
	
			</div>
		</div>
	</div>
	
		
					
	
					
</body>
</html>