<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "web project") or die("Unable to connect");  
if(isset($_POST['remove'])){
 	$product_id=$_GET['id'];
 	$query="DELETE FROM table_product_detail WHERE id='$product_id'";
 	if(mysqli_query($connect, $query)){
	    //echo "Records deleted successfully.";
	    echo '<script>alert("Records deleted successfully..")</script>';
		echo "<script>window.location='admindelete.php'</script>";
	
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
	}
}
 ?>  