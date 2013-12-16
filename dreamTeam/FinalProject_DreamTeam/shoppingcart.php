<?php
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Your order was not updated!, The quantity must be a number between 1 and 999';
			}
		}
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

<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item?')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your order, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>

</head>
	<body>
		<form name="form1" method="post">
			<input type="hidden" name="pid" />
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
							<div>
								<div width:600px>
									<div id="mainContent">
										<h1 id="mainHeading">Your Order</h1><br /><br />
											<input type="button" class="button1" value="Order more food" onclick="window.location='order_online.php'" />		<div style="color:#F00"><?=$msg?></div>
											<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px;" width="100%">
											
    	<?php
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
		?>
												<tr bgcolor="#FFFFFF">
													<td><?=$pname?></td>
													<td>$ <?=get_price($pid)?></td>
													<td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>
													<td>$ <?=get_price($pid)*$q?></td>
													<td><a href="javascript:del(<?=$pid?>)">Remove</a></td>
												</tr>
            <?php					
				}
			?>
												<tr>
													<td><b>Order Total: $<?=get_order_total()?></b></td>
													<td colspan="5" align="right">
														<input type="button" value="Clear Order" onclick="clear_cart()">
														<input type="button" value="Update Order" onclick="update_cart()">
														<input type="button" value="Place Order" onclick="">
													</td>
												</tr>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>Your order is empty!</td>";
			}
		?>
											</table>
										</div>
									</div>
								</div>
						</article>
					</div>
			</div>
		</form>
	</body>
</html>


