<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "web project") or die("Unable to connect");  
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
</head>
<body>
<!-- Top -->
<div id="top">
	
	<div class="shell">
		
		<!-- Header -->
		<div id="header">
			<div  class="name">
				<a href="index.php">Mobile World</a>	
			</div>		
			<div id="navigation">

				<ul>
					<li><form action="search.php" method="post">
					<input type="text" name="search-bar" value="" size="40" >
					<input type="submit" name="search" value="Search">
					</form></li>
				    <li><a href="index.php">Home</a></li>
					<li><a href="account.html">My Account</a></li>
					<li><a href="store.html">The Store</a></li>
					<li class="last"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Slider -->
		<div id="slider">
			<div id="slider-holder">
				<ul>
				    <li><a href="#"><img src="images/rsz_1slide-2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="images/phones-tabs.jpg" alt="" /></a></li>
				</ul>
			</div>
			<div id="slider-nav">
				<a href="#" class="prev">Previous</a>
				<a href="#" class="next">Next</a>
			</div>
		</div>
		<!-- End Slider -->
		
	</div>
</div>
<!-- Top -->

<!-- Main -->
<div id="main">
	<div class="shell">
		<!-- Search, etc -->
		<div class="options">
		<div class="right">
			<span class="cart">

				<a href="cart1.php" class="cart-ico">&nbsp;</a>
				 <?php
				 if(!empty($_SESSION["cart"]))
				 {	
			
					$total = 0.00;
				
					foreach($_SESSION["cart"] as $keys => $values)
					{
					?>
					<?php 
					$total = $total + ($values["item_quantity"] * $values["product_price"]);
					}
					?>
				</span>
			<span class="left more-links">
				<strong>Rs.<?php echo number_format($total, 2); ?></strong>
					 <?php
						}
					 ?>

				</span>
			</div>
		</div>

		<!-- End Search, etc -->
		
		<!-- Content -->
		<div id="content">
			<h3>Home</h3>
		</div>
			<div id="container">

				<?php
			      $query = "SELECT * FROM table_product_detail ORDER BY id ASC";  
			      $result = mysqli_query($connect, $query);  
			      while($row = mysqli_fetch_array($result))  
			      {  
			      ?>  
			                <div class="items" align="center">   

							<!--div class="cl">&nbsp;</div-->
							<!--ul-->
								<li>		
									<form method="post" action="cart1.php?action=add&id=<?php echo $row["id"]; ?>">
 		                               <a href="details.php?action=detail&id=<?php echo $row["id"]; ?>" name="detail"><img src="css/images/<?php echo $row["image"]; ?>" class="img-responsive"/><br /> </a> 
		                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
		                               <h4 class="text-danger">Rs.<?php echo $row["price"]; ?></h4>  
		                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" /> <br> 
			                           <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
			                           <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />
			                           <!--input type="submit" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-default" value="Add to Cart" /-->
			                           <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Cart">

			                        </form>
			                     </li>     
			                <!--/ul-->
			                	</div>
	                    	 <?php  
			                     }  
			                     ?> 
           					<div class="cl">&nbsp;</div>	
				<!-- Brands -->
				<div class="brands">
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
				<!-- End Footer -->
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	
<!-- End Main -->
</body>

