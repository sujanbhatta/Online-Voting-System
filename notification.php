<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_COURSE']);
	unset($_SESSION['NAME']);
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
						


	<p class="ss text-center">	Your Vote Has been Submited , Thank you for your time<br>
		note <span style="font-style:italic">( you cannot vote again after you read this confirmation )</span><br>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, Click the <a href='index.php'>link</a> </p>
<?php
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_COURSE']);
	unset($_SESSION['NAME']);
?>
						
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