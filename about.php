<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
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
	<div class="container" style="background: url(images/overviewback.jpeg); height:100%; width:100%;">
    <div class="row">
    <div class="col-sm-12">
    <h3><b>Overview</h3></b>
   <p> Election Commission of Nepal is a constitutional Election Management Body in Nepal. Constitution of Nepal has made arrangements about the Election Commission in Section 24, article 245 to 247. The constitution has embraced the competitive multiparty democratic system, adult franchise and periodic elections as fundamental guiding principles of democracy. Depending on the constitutional provisions, the Commission has the responsibility to conduct the elections of different tires – federal, provincial and local bodies – as per the stipulated electoral systems.

The Election Commission has the responsibility to conduct, supervise, direct and control the elections of the President, the Vice President, Members of Federal Parliament, Provincial Assemblies and Local Bodies. The Election Commission is also responsible for preparing the voters’ list for the purpose of election. The Commission can also hold referendum on subject of national importance as per the Constitution and Federal laws.

There are five Commissioners including a Chief Election Commissioner. The Chief Election Commissioner acts as the Chairperson of the Election Commission. The Commissioners are appointed by the President on the recommendation of the Constitutional Council and their terms is of six years from the date of appointment. However, if they get the age of 65 years they retire earlier.<br><br>
 Nepalese citizen possessing qualifications such as holding a Bachelor's Degree, not being a member of any political party immediately before the appointment, attained the age of forty five, possessing high moral character is eligible to be appointed as the Chief Election Commissioner or an Election Commissioner.

Structurally, Election Commission has its Secretariat led by the Secretary of the Government of Nepal. The Secretariat comprises four divisions and nine sections in the headquarters, and there are 77 District Election Offices across the country. The Secretariat implements the policy as decided by the Commission.<br><br>
   This Online Voting enables voters to cast their vote privately and easily from any location and on any device with Internet access (PC, tablet, smartphone, etc.), ensuring maximum election engagement by enabling remote and disabled voters to participate on equal terms.

Voter privacy, election integrity, end-to-end security, vote correctness and full verifiability (individual and universal) are guaranteed via advanced cryptographic protocols. This enables election officials to assure citizens that their votes remain cast-as-intended, recorded-as-cast and counted-as-recorded. In addition to the added accessibility and security, operational efficiencies result from significantly reduced costs and the delivery of more timely and accurate results.
Nepalese citizen possessing qualifications such as holding a Bachelor's Degree, not being a member of any political party immediately before the appointment, attained the age of forty five, possessing high moral character is eligible to be appointed as the Chief Election Commissioner or an Election Commissioner.<br><br>
Structurally, Election Commission has its Secretariat led by the Secretary of the Government of Nepal. The Secretariat comprises four divisions and nine sections in the headquarters, and there are 77 District Election Offices across the country. The Secretariat implements the policy as decided by the Commission.
</p>
    </div>
 
    </div><!--end of row-->
	</div><!--container fluid end-->
	

	<!-- footer-area starts -->
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
	
			
	<!-- footer-area ends -->
	

		
					
	
					
</body>
</html>