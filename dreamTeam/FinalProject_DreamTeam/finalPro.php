<!DOCTYPE html>
<html lang="en">
<head>
<title>Ahnvee - The best cajun in Albany</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 

</head>

<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main">
			
<!-- header -->
				<header>
					<h1><a href="index.php" id="logo">Cajun Restaurant</a></h1>
					<nav>
						<ul id="menu">
							<li><a href="index.php"><p> Home </p></a></li>
							<li class="active"><a href="reservations.php"><p> Make Reservation </p></a></li>
							<li><a href="order_online.php"><p>Menu / Order Online</p></a></li>
							<li><a href="contact.php"><p> Contact us </p></a></li>
						</ul>
					</nav>
				</header>
<!-- / header -->

<!-- content -->
				<article id="content">
					<div class="content_bg">
						
<div id="make_reservation">

						<!-- RESERVATIONS -->
					
					
					
					
					
					
					
					
					
												
<!DOCTYPE html>

<html>
<!-- <link rel="stylesheet" href="finalPro.css" type="text/css"> -->
<head>
<script type="text/javascript" src="finalPro.js"></script>
<title>Reservations</title>
</head>



<body>
<div id="reservationContent">
<h1 id="reservationsHeading">Thank you</h1>
<br />
<br />
<br />
<div id="confirmation">
<?php

$conn = mysql_connect('localhost','user1','user1pass');
$db = mysql_select_db("test",$conn);
?>

<?php

$fname = ($_POST['fName']);
$lname = ($_POST['lName']);
$phone = ($_POST['Phone']);
$section = ($_POST['Section']);
$seats = ($_POST['Seats']);
$date = ($_POST['Date']);
$time = ($_POST['Time']);
$sql = "INSERT into reservation(res_Fname, res_Lname, res_Phone, email, seats, date, time, tlbSect) 
Values('$_POST[fName]','$_POST[lName]','$_POST[Phone]','$_POST[Email]','$_POST[Seats]','$_POST[Date]','$_POST[Time]','$_POST[Section]')";
$qury = mysql_query($sql);
#INSERT into reservations values

if(!$qury)
    echo "Failed ".mysql_error();
else
    echo "Thank you. Your reservation was an success!";
    echo "<br>";
    echo "Your reservation is for " .$date. " at " .$time. "pm.<br/>";  
  
  
  //email
$email = ($_POST['Email']);
$myemail= "jarelt.41@gmail.com";
$email1 = "$email, $myemail";
$subject = "Your reservation";

$message = "
Name: $fname $lname
Date: $date
Time: $time 
Section: $section
Seats: $seats
Phone Number: $phone
";
//email   
mail($email1,$subject,$message)
?>
</div>
</div>
</body>

</html>
							
							
							
							
							
							
							
							
													
						<!-- The code for making reservations goes here -->
						
						</div>
						
					</div>
					<div class="wrap">
						
					</div>
				</article>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

