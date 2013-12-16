<?php
	include("includes/db.php");
	include("includes/functions.php");
	
	if(isset($_REQUEST['command']) && $_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();
	}
?>

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

<script type="text/javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>

</head>
	<body>
		<form name="form1">
			<input type="hidden" name="productid" />
			<input type="hidden" name="command" />
			<div class="body">
				<div class="main">
<!-- header -->
					<header>
						<h1><a href="index.php" id="logo">Cajun Restaurant</a></h1>
							<nav>
								<ul id="menu">
									<li><a href="index.php"><p> Home </p></a></li>
									<li><a href="reservations.php"><p> Make Reservation </p></a></li>
									<li class="active"><a href="order_online.php"><p>Menu / Order Online</p></a></li>
									<li><a href="contact.php"><p> Contact us </p></a></li>
								</ul>
							</nav>
					</header>
<!-- / header -->

<!-- content -->
				<article id="content">
					<div class="content_bg">
						<div id="mainContent">
							<h1 align="center" id="mainHeading">Menu</h1>
								<br />
					<table id="menuTable" cellpadding="2px" width="600px">
		 <?php
			$result=mysql_query("select * from menu");
			while($row=mysql_fetch_array($result)){
		 ?>
						<tr>
							<td>	<b><?php echo $row['name']?></b></td>
							<td><?php echo $row['description']?></td>
							<td id="price">Price:<big style="color:green">$<?php echo $row['price']?></big></td>
							<td><input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['serial']?>)" /></td>
						</tr>
						<tr><td colspan=2><hr size="1" /></td>
						<? } ?>
					</table>
						<input type="button" class="button1" value="View your order" onclick="window.location='shoppingcart.php'" />
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>