<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "web project");
if(isset($_POST["add"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>window.location="index.php"</script>';
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="index.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'product_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
		echo '<script>window.location="index.php"</script>';
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			
			if($values["product_id"] == $_GET["id"])
			//if($values["product_id"] ==isset($_GET['id']) ? $_GET['id'] : '';
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}
if(isset($_GET["buy"])){
	echo'<script>alert("bgdeidcuek")</script>';
}
?>
<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Mobile Phone</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>	
	<script type="text/javascript">
		function buy(){
			alert("This is construction future");
		}
	</script>
</head>
<body>
<!-- Top -->
<div id="top_other">
	
	<div class="shell">
		
		<!-- Header -->
		<div id="header">
			<h1><a href="#">Mobile World</a></h1>
			<div id="navigation">
				<ul>
				    <li><a href="index.php">Home</a></li>
					<li><a href="account.html">My Account</a></li>
					<li><a href="store.html">The Store</a></li>
					<li class="last"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="main">
	<div class="shell">
	<div id="content">
		<h3>Shopping Cart</h3>
	</div>
	<div id="container" align="center">
		<table border="1" cellspacing="5px">
		    <tr>
			    <th width="40%">Product Name</th>
			    <th width="10%">Quantity</th>
		    	<th width="20%">Price Details</th>
		    	<th width="15%">Order Total</th>
		    	<th width="5%">Action</th>
		    </tr>
		    <?php
			if(!empty($_SESSION["cart"]))
			{
				$total = 0;
				foreach($_SESSION["cart"] as $keys => $values)
				{
			?>
        <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td align="center"><?php echo $values["item_quantity"] ?></td>
            <td align="right">Rs. <?php echo $values["product_price"]; ?></td>
            <td align="right">Rs.<?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="cart1.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>
        </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
			}
			?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>

        <?php
		}
		?>
    </table>
    	<input type="button" name="buy" value="Place Order" onclick="return buy()">

    <div class ="cl">&nbsp</div>
			
			<div class="cl">&nbsp</div>
				<!-- Brands -->
				<div class="brands" align="left">
					<h2>Brands</h2>
					<div class="logos"align="center">
						<a href="https://www.nokia.com/en_int/phones?gclid=EAIaIQobChMIgNCV1raC3AIVyCMrCh1UpAmNEAAYASAAEgJlf_D_BwE&gclsrc=aw.ds"><img src="images/nokia_logo.png" alt="" /></a>
						<a href="https://www.apple.com/lae/"><img src="images/apple_logo.jpg" alt="" /></a>
						<a href="https://www.samsung.com/us/mobile/phones/"><img src="images/samsung-logo.png" alt="" /></a>
						<a href="https://www.huawei.com/en/?ic_medium=direct&ic_source=surlent"><img src="images/huawei_logo.jpg" alt="" /></a>
						<a href="https://www3.lenovo.com/lk/en/"><img src="images/lenovo_logo.png" alt="" /></a>
						<a href="https://www.htc.com/us/"><img src="images/htc_logo.png" alt="" /></a>
						<a href="https://www.sonymobile.com/#gref"><img src="images/sony_logo.jpg" alt="" /></a>
					</div>
				</div>
				<!-- End Brands -->
				
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="index.php">Home</a>
						<span>|</span>
						<a href="account.html">My Account</a>
						<span>|</span>
						<a href="store.html">The Store</a>
						<span>|</span>
						<a href="contact.html">Contact</a>
					</div>
					<div class="right">
						&copy; SE-UOK.
					</div>
				</div>
			</div>
				<!-- End Footer -->
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
	
</body>
</html>