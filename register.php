
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

	<style type="text/css">
		.error_hide{
			display: none;
		}
		.error_show{
			color: red;
		}

		.success_hide{
			display: none;
		}
		.success_show{
			color: green;
		}
	</style>

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
							<li><a href="about.php">About</a>
                             <ul>
                            <li><a href="about.php">Overview</a>
                            </li>
                            <li><a href="laws.php">Laws and Procedure</a></li>
                            </ul>
							</li>
							
							<li><a href="voting.php">vote</a></li>
							<li class="current"><a href="register.php">voter registration</a> 
								
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
	<div class="content-area"> 
		<div class="container"> 
			
				<div class="col-md-7 middle-area"> 
					<div class="content"> 
						<h1 class="text-center">Registration</h1>

						<script type="text/javascript">
						function validateForm()
						{
						var a=document.forms["frmOne"]["password"].value;
						var b=document.forms["frmOne"]["rpassword"].value;
						if (a!=b)
						  {
						  alert("password mismatch");
						  return false;
						  }
						}
						</script>

						<div class="col-sm-offset-2 success_hide" id="success">
							<h4> >> Successfully Regigtered! <br> >> You can now login to vote <a rel="facebox" href="voting.php">Here</a>.</h4>					
						</div>
						<div class="col-sm-offset-2 error_hide" id="error">
							<h4> >> ID Number Does Not exist Or Already Taken.</h4>					
						</div>
						
						<form class="form-horizontal" name = "frmOne" method="POST" onsubmit="return validateForm()">

						<div class="form-group">
						<label class="col-sm-3 control-label">NID</label>
						<div class="col-sm-6">
						  <input type="text" name="nid" class="form-control" id="inputEmail3" placeholder="NID" required>
						</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Username</label>
						<div class="col-sm-6">
						  <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
						</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Password</label>
						<div class="col-sm-6">
						  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
						</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Re-Enter Password</label>
						<div class="col-sm-6">
						  <input type="password" name="rpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
						</div>
						</div>
						<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
						  <input type="submit" value="Save" class="btn btn-default" />
						</div>
						<div class="col-sm-offset-2 col-sm-9">
						  <label class="col-sm-8 control-label">Already register? Login 
	  					  <a rel="facebox" href="voting.php">Here</a><br></label><br>
						</div>
						</div>
						</form>
						
					</div>
				</div>
				
				<div class="col-md-5">
				<h3><b>Having Trouble ?</h3></b>
				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Click Here to Solve Problem</button>
  <div id="demo" class="collapse">
    <li>First of all admin must enter your NID in database</li>
    <li>Then you should go to the register page and register your account</li>
    <li>After you complete the registration process you should go to login page</li>
    <li>After you visit the login page enter the NID and your username and Password and hit login button</li>
    *************** Now you are login to the login page **************
    Notice:: You can cast vote only one time as well as you can login only one time. So be carefull
  </div><br><br>
  <h4>Beside this if you hae further problem feel free to contact us</h4>
  <div class="btn-group">
    <a href="contact.php" class="btn btn-primary active btn-lg">
        <i class="" aria-hidden="true"></i> Contact Us
    </a>
    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-area ends -->
	
	
	
	
	
	
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
	
	
		
	<script type="text/javascript">
	    $('form').on('submit', function (e) {
	      e.preventDefault();
	      $.ajax({
	        type: 'post',
	        url: 'save.php',
	        data: $('form').serialize(),
	        success: function (data) {
	          if(data == "success"){
	          	$("#success").removeClass('success_hide');
	          	$("#error").removeClass('error_show');
	          	$("#error").addClass('error_hide');
				$("#success").addClass('success_show');
	          }else{				
				$("#error").removeClass('error_hide');
				$("#success").removeClass('success_show');
				$("#success").addClass('success_hide');
				$("#error").addClass('error_show');
	          }
	        }
	      });
	    });
	</script>		
	
					
</body>
</html>