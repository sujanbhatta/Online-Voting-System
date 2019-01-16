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
	
	<div class="container law">
	<div class="row">
	<div class="col-sm-12 lp">
<h3><b>Laws and Procedure</h3></b>
<p style="color:white">Some of the questions that are addressed by election law are:<br<br>

    <li>Which people are entitled to vote in an election (e.g. age, residency or literacy requirements, or poll taxes), and the procedures by which such persons must register to vote or present identification in order to vote</li><br>
    <li>Which people are entitled to hold office (for example, age, residency, birth or citizenship requirements), and the procedures candidates must follow to appear on the ballot (such as the formatting and filing of nominating petitions) and rules governing write-in candidates</li><br>
    <li>The rules about what subjects may be submitted to a direct popular vote through a referendum or plebiscite, and the rules that governmental agencies or citizen groups must follow to place questions on the ballot for public consideration</li><br>
    <li>The framework by which political parties may organize their internal government, and how they select candidates to run for political office (e.g. primary elections)</li><br>
    <li>The financing of elections (e.g. contribution limits, rules for public financing of elections, the public disclosure of contributors, and rules governing interest groups other than a candidate's campaign organization)</li><br>
    <li>The requirements for creating districts which elect representatives to a legislative assembly (examples include congressional districts, ridings or wards within a municipality)</li><br>
    <li>What restrictions are placed on campaign advocacy (such as rules on anonymous or false advertising)</li><br>
    <li>How votes are cast at an election (including whether to use a paper ballot, or some other form of recording votes such as a mechanical voting machine or electronic voting device, and how information is presented to voters on the ballot or device)</li><br>
    <li>How votes are counted at an election, recounts, and election challenges</li><br>
    <li>Whether, and how, voters or candidates may file legal actions in a court of law or administrative agency to enforce their rights or contest the outcome of an election</li><br>
    <li>Definition of electoral fraud and other crimes against the electoral system</li><br>
    <li>The sources of election law (for example, constitutions, national statutes, state statutes, or judicial decisions) and the interplay between these sources of law</li><br><br>
    <div class="btn-group">
    <a href="pdf/law.pdf" class="btn btn-primary active btn-lg">
        <i class="fa fa-gavel" aria-hidden="true"></i> View Laws and Procedure
    </a>
    </div>


	</div>
	</div>
	</div>
	
	
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