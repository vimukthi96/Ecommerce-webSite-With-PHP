<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "web project") or die("Unable to connect");  
 if(isset($_POST['Slog'])){
 	$userName=mysqli_real_escape_string($connect, $_REQUEST['Sname']);
	$passward=mysqli_real_escape_string($connect, $_REQUEST['Spass']);
	$conPassward=mysqli_real_escape_string($connect, $_REQUEST['Scpass']);
	if($passward==$conPassward){
		$query = "INSERT INTO `table_user` (`name`, `passward`) VALUES( '$userName','$passward' )";
		echo '<script>alert("This is under construction..but inserted data into the database..place order will be soon in this account profile.. admin only can access in this moment")</script>';
		echo "<script>window.location='account.html'</script>";
	}else{
		//echo'wrong';
		echo '<script>alert("Passward Confirmation is wrong..")</script>';
		echo "<script>window.location='account.html'</script>";
	}
	if(mysqli_query($connect, $query)){
	//	echo"dej";
	    echo "<script>window.location='account.html'</script>";
	}
	 else{
	 	echo "<script>window.location='account.html'</script>";
   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
   	}
 }
 if(isset($_POST['Llog'])){
 	$userName=mysqli_real_escape_string($connect, $_REQUEST['Lname']);
	$passward=mysqli_real_escape_string($connect, $_REQUEST['Lpass']);
	if($userName =="admin" && $passward=="admin"){
		echo "<script>window.location='admin.php'</script>";
	}
	else{
		echo '<script>alert("Admin can only access in this moment..")</script>';
		echo "<script>window.location='account.html'</script>";
	}

	
 }
 ?>  
 