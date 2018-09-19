<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "web project");
if(isset($_GET['id']) && $_GET['id'] !== ''){
 
  $product_id = $_GET['id'];
  echo $product_id;

} else {
  echo "failed";
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
		<h3>More Details</h3>
	</div>
		<div id="container" align="center">
			<?php
			      $query = "SELECT * FROM table_product_detail WHERE id ='$product_id'";  
			      $result = mysqli_query($connect, $query)  or die (mysqli_error());  
			      while($row = mysqli_fetch_array($result) )  
			      {  
			      ?>  	
 		               <img src="css/images/<?php echo $row["image"]; ?>" class="img-respon"/><br /> 
		               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
		               <h4 class="text-danger">Rs.<?php echo $row["price"]; ?></h4>  
		               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
		               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />
		<div class ="cl">&nbsp</div>
			<div class="dis">
				<table border="1">
					<tr >
						<th>NETWORK</th>
						<td>Technology</td>
						<td><?php echo $row["net_tec"]; ?></td>
					</tr>
					<tr>
						<th rowspan="4">BODY</th>
						<td>Dimentions</td>
						<td><?php echo $row["body_dim"]; ?></td>
						</tr><tr>
						<td>Weight</td>
						<td><?php echo $row["body_weight"]; ?></td></tr>
						<td>Build</td>
						<td><?php echo $row["body_build"]; ?></td>
						</tr><tr>
						<td>SIM</td>
						<td><?php echo $row["body_sim"]; ?></td>
					</tr>
					<tr>
						<th rowspan="4">PLATFORM</th>
						<td>OS</td>
						<td><?php echo $row["plat_os"]; ?></td>
						</tr><tr>
						<td>Chipset</td>
						<td><?php echo $row["plat_chip"]; ?></td></tr>
						<td>CPU</td>
						<td><?php echo $row["plat_cpu"]; ?></td>
						</tr><tr>
						<td>GPU</td>
						<td><?php echo $row["plat_gpu"]; ?></td>
					</tr>

					<tr>
						<th rowspan="4">DISPLAY</th>
						<td>Type</td>
						<td><?php echo $row["ty_type"]; ?></td>
						</tr><tr>
						<td>Weight</td>
						<td><?php echo $row["ty_weight"]; ?></td></tr>
						<td>Build</td>
						<td><?php echo $row["ty_build"]; ?></td>
						</tr><tr>
						<td>SIM</td>
						<td><?php echo $row["ty_sim"]; ?></td>
					</tr>

					<tr>
						<th rowspan="2">MEMORY</th>
						<td>Card Slot</td>
						<td><?php echo $row["mem_card_slot"]; ?></td>
						</tr><tr>
						<td>Internal</td>
						<td><?php echo $row["mem_internal"]; ?></td>
					</tr>

					<tr>
						<th rowspan="4">CAMERA</th>
						<td>Primary</td>
						<td><?php echo $row["cam_pri"]; ?></td>
						</tr><tr>
						<td>Features</td>
						<td><?php echo $row["cam_feat"]; ?></td></tr>
						<td>Vedio</td>
						<td><?php echo $row["cam_vedio"]; ?></td>
						</tr><tr>
						<td>Secondary</td>
						<td><?php echo $row["cam_sec"]; ?></td>
					</tr>
					<tr>
						<th rowspan="3">FEATURES</th>
						<td>Sensors</td>
						<td><?php echo $row["fea_sen"]; ?></td>
						</tr><tr>
						<td>Messanging</td>
						<td><?php echo $row["fea_mass"]; ?></td></tr>
						<td>Browser</td>
						<td><?php echo $row["fea_brow"]; ?></td>			
					<tr>
						<th rowspan="3">BATTERY</th>
						<td>Capacity</td>
						<td><?php echo $row["bat_cap"]; ?></td>
						</tr><tr>
						<td>Talk time</td>
						<td><?php echo $row["bat_talk"]; ?></td></tr>
						<td>Music play</td>
						<td><?php echo $row["bat_mus"]; ?></td>	
					</tr>

					<tr>
						<th rowspan="4">MISC</th>
						<td>Color</td>
						<td><?php echo $row["misc_color"]; ?></td>
						</tr><tr>
						<td>SAR</td>
						<td><?php echo $row["misc_sar"]; ?></td></tr>
						<td>SAR EU</td>
						<td><?php echo $row["misc_sareu"]; ?></td>
						</tr><tr>
						<td>Price</td>
						<td align="center">Rs.<?php echo $row["price"]; ?></td>
					</tr>
				</table>
				<?php  
			        }  
			       ?>
		</div>

		
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
				

    	   
        	