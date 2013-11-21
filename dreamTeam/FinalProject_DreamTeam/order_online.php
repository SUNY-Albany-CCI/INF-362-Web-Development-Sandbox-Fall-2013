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
							<li><a href="index.php"><p>Home</p></a></li>
							<li><a href="order_online.php"><p>Menu</p></a></li>
							<li><a href="reservations.php"><p>Make Reservation</p></a></li>
							<li class="active"><a href="order_online.php"><p>Order Online</p></a></li>
							<li><a href="contact.php"><p>Contact us</p></a></li>
						</ul>
					</nav>
				</header>
<!-- / header -->

<!-- content -->
				<article id="content">
					<div class="content_bg">
						
						<div id="order_online">
						
						<!-- ORDER ONLINE -->
						<!-- The code ordering online goes here -->
						<h2>MENU:</h2>
						<br>
						<h3>Appetizers:</h3>
						<p>this needs to reference Database/appetizers.xml</p>
						<h3>Salads:</h3>
						<p>this needs to reference Database/salads.xml</p>
						<h3>Po' Boys:</h3>
						<p>this needs to reference Database/poBoys.xml</p>
								<?php
  								$data = array();
  
  								function add_menu( $PoBoy, $Desc, $price1, $price2 )
  								{
  								global $data;
  
  								$data []= array(
  								"Po' Boys" => $PoBoy,
  								'Description' => $Desc,
  								'last' => $Price1,
  								'email' => $Price2 
  								);
  								}
  
  								if ( $_FILES['file']['tmp_name'] )
  								{
  								$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
  								$rows = $dom->getElementsByTagName( 'Row' );
  								$first_row = true;
  								foreach ($rows as $row)
  								{
  								if ( !$first_row )
  								{
  								$first = "";
  								$middle = "";
  								$last = "";
  								$email = "";
  
  								$index = 1;
  								$cells = $row->getElementsByTagName( 'Cell' );
  								foreach( $cells as $cell )
  								{ 
 							 	$ind = $cell->getAttribute( 'Index' );
  								if ( $ind != null ) $index = $ind;
  
  								if ( $index == 1 ) $first = $cell->nodeValue;
  								if ( $index == 2 ) $middle = $cell->nodeValue;
  								if ( $index == 3 ) $last = $cell->nodeValue;
  								if ( $index == 4 ) $email = $cell->nodeValue;
  
  								$index += 1;
  								}
  								add_menu( $first, $middle, $last, $email );
  								}
  								$first_row = false;
  								}
  								}
  								?>
  								<html>
  								<body>
  								<table>
  								<tr>
  								<th>First</th>
  								<th>Middle</th>
  								<th>Last</th>
  								<th>Email</th>
  								</tr>
  								<?php foreach( $data as $row ) { ?>
  								<tr>
 								<td><?php echo( $row['first'] ); ?></td>
 								<td><?php echo( $row['middle'] ); ?></td>
  								<td><?php echo( $row['last'] ); ?></td>
  								<td><?php echo( $row['email'] ); ?></td>
  								</tr>
								</table>
								</body>
								</html>
  								<?php } ?>
						
						<h3>Burgers:</h3>
						<p>this needs to reference Database/burgers.xml</p>					
						
						<h3>Bowls</h3>
						<p>this needs to reference Database/bowls.xml</p>
						
						<h3>Plates</h3>
						<p>this needs to reference Database/plates.xml</p>
						</div>
						
					</div>
					<div class="wrap">
						
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<div class="body3">
	<div class="body4">
		<div class="main">
		
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col1 pad_left1">
						<h3>Phone: <span>1-800-555-1234</span></h3>
					</section>
					<section class="col2 pad_left1">
						<h3>Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon4.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Technorati"><img src="images/icon5.gif" alt=""></a></li>
						</ul>
					</section>
				</div>
			</footer>
<!-- / footer -->

		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>