<?php 
	include 'connection/auth.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>EVS | Electronic Voting System</title>
	
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is a online voting website in Nepal. We are providing easiest online service for election." >
	<meta name="keywords" content="Online voting system, electronic voting system, electronic voting system in Nepal" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Sujan Bhatta">        
	
	<!-- style sheets -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/facebox.css" media="all">
	<link rel="stylesheet" type="text/css" href="admin.css" media="all">
	
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Diplomata+SC" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popup.js"></script>
	<script type="text/javascript" src="js/facebox.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'images/loading.gif',
      closeImage   : 'images/closelabel.png'
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
	<div class="header-area" id="top"> 
		<div class="logo-menu">
			<div class="container"> 
				<div class="row ">
					
					<div class="logo-area col-md-2"> 
						<a href="home.php"><img src="images/headerlogo.jpg" style="height:40px; width:50px;"><b><p style="color:black;">Electronic Voting System</p></a>

					</div>
					<div class="menu col-md-offset-1 "> 
						<ul>
							<li><a href="home.php">Home</a></li>
							<!-- <li><a href="electiontype.php">election type</a></li> -->
							<li><a href="parties.php">parties</a></li>
							<li><a href="position.php">position</a></li>
							<li><a href="candidates.php">candidates</a></li>
							<li><a href="voterinfo.php">voters info</a></li>
							<li><a href="voters.php">voters</a></li>
							<li class="current"><a href="winner.php">winner</a></li>
							<li><a href="admin.php">admin</a></li>
                            <li><a href="loginbutton.php">Timing</a></li>
							<li><a href="logout.php">log out</a></li>
							
						</ul>
					</div>
										
					
				</div>
			</div>
		</div>
		
	</div>
	<!-- header area ends -->
	
	<div class="container  clearfix">
		
		<div class="two-thirds1 column">
			<div class="thewraper">
			<div class="btn-group" style="margin-top:20px;">
    <a id="addd" href="javascript:Clickheretoprint()" class="btn btn-primary active btn-lg">
        <i class="" aria-hidden="true"></i>Print
    </a>
    </div>
				<div class="content" id="content">
				<div style="text-align: center;">
				<img src="../images/Election.jpg" align="center" width="250px", height="200px">
				<h3>इलेक्ट्रोनिक भोट प्रणाली परिणाम</h3>
				<p>निर्वाचन आयोग, नेपाल</p>
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
				
				</div>
			</div>
		</div>
	</div>
	<?php 
		include 'footer.php';
	?>