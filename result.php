<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['NAME']);
?>

 <script type="text/javascript">
    $(document).ready(function(){
		$("#submit").click(function(e){
		e.preventDefault();
		  $.ajax({
		    type: 'POST',
		    url: 'login.php',
		    data: {
	        	nid: $("#nid").val(),
	            username: $("#username").val(),
	            password: $("#password").val()
	        },
		    beforeSend: function(){
		      alert(data);
		    },
		    success : function(response){
		      //alert(response);
		        if(response=="true"){
		            $("#error").html("CORRECT USERNAME AND PASSWORD")
		        //window.location="home.php";
		        }else{
		            $("#error").html('<a>WRONG</a>');
		        }
		    },
		    error : function(response) {
		        $("#error").html('error'+ error);
		    }

		  });
		});
		});
	</script>


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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

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
	<script language="javascript">
	function Clickheretoprint()
	{ 
	  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
	      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
	  var content_vlue = document.getElementById("content").innerHTML; 
	  
	  var docprint=window.open("","",disp_setting); 
	   docprint.document.open(); 
	   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
	   docprint.document.write(content_vlue); 
	   docprint.document.close(); 
	   docprint.focus(); 
	}
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
							<li class="current"><a href="index.php">Home</a></li>
							<li><a href="">About</a>
                            <ul>
                            <li><a href="about.php">Overview</a>
                            </li>
                            <li><a href="laws.php">Laws and Procedure</a></li>
                            </ul>
							
						
							<li><a href="voting.php">Vote</a></li>
							<li><a href="register.php">voter registration</a> 
								
							</li>
							<li><a href="result.php">Result</a></li>
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
			
				<div class="col-md-12 middle-area"> 
					
		
						

                    <div class="btn-group">
    <a id="addd" href="javascript:Clickheretoprint()" class="btn btn-primary active btn-lg">
        <i class="" aria-hidden="true"></i>Print
    </a>
    </div>

						
					
						<div class="content" id="content">
						<div style="text-align: center;">
                        <img src="images/Election.jpg" align="center" width="300px", height="200px">
						<h3 class="text-center">इलेक्ट्रोनिक भोट प्रणाली परिणाम</h3>
						<p class="text-center">निर्वाचन आयोग, नेपाल</p>
						
						</div>
						
						
						<?php
						include('connection/connect.php');
						$resultasa = $db->prepare("SELECT * FROM position");
					$resultasa->execute();
					for($i=0; $rowasa = $resultasa->fetch(); $i++){
					$exrxrxrx=$rowasa['name'];
					$dsds=$exrxrxrx;
					echo '<div style="margin-top: 18px;">';
					echo '<strong>'.$exrxrxrx.'</strong><br>';
					$results = $db->prepare("SELECT * FROM candidates Where position = :a and 
				votes = (SELECT votes FROM candidates Where position = :a ORDER BY votes DESC LIMIT 1)");
						$results->bindParam(':a', $dsds);
						$results->execute();
						for($i=0; $rows = $results->fetch(); $i++){
							echo $rows['name'].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['votes'].'<br>';
						}
					echo '</div>';
					}					
				?>
						<br>
						<br>
						<br>
						<br>

						<div>
							<b>Time: </b>
							<?php
								date_default_timezone_set("Asia/Kathmandu");
								echo date("h:i:sa");
							?>
						</div>
						
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
	
	
		
					
	   
	
					
</body>
</html>