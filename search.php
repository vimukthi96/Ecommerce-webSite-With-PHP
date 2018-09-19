<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "web project") or die("Unable to connect");  
if(isset($_POST['search'])){
 	$name=$_POST['search-bar'];
 		echo"$name";
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
		<h3>Search Product</h3>
	</div>
		<div id="container" align="center">
			<?php
			      $query = "SELECT * FROM table_product_detail WHERE name LIKE '%$name%'ORDER BY id ASC";  
			      $result = mysqli_query($connect, $query);  
			      while($row = mysqli_fetch_array($result))  
			      {  
			      ?>  
			                <div class="items" align="center">   
							<!--div class="cl">&nbsp;</div>
							<ul-->
								<li>		
									<form method="post" action="cart1.php?action=add&id=<?php echo $row["id"]; ?>">
 		                            <!--form method="post" action="cart1.php?action=add&id=<?php echo $row["id"]; ?>"-->
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