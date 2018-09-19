<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "web project") or die("Unable to connect");  
if(isset($_POST["submit"]))
{ 
	$Pname=mysqli_real_escape_string($connect, $_REQUEST['Pname']);
	
	$Pimage=mysqli_real_escape_string($connect, $_REQUEST['Pimage']);
	$Pprice=mysqli_real_escape_string($connect, $_REQUEST['Pprice']);
	$net_tec=mysqli_real_escape_string($connect, $_REQUEST['net_tec']);
	$body_dim=mysqli_real_escape_string($connect, $_REQUEST['body_dim']);
	$body_weight=mysqli_real_escape_string($connect, $_REQUEST['body_weight']);
	$body_build=mysqli_real_escape_string($connect, $_REQUEST['body_build']);
	$body_sim=mysqli_real_escape_string($connect, $_REQUEST['body_sim']);
	$plat_os=mysqli_real_escape_string($connect, $_REQUEST['plat_os']);
	$plat_chip=mysqli_real_escape_string($connect, $_REQUEST['plat_chip']);
	$plat_cpu=mysqli_real_escape_string($connect, $_REQUEST['plat_cpu']);
	$plat_gpu=mysqli_real_escape_string($connect, $_REQUEST['plat_gpu']);
	$ty_type=mysqli_real_escape_string($connect, $_REQUEST['ty_type']);
	$ty_weight=mysqli_real_escape_string($connect, $_REQUEST['ty_weight']);
	$ty_build=mysqli_real_escape_string($connect, $_REQUEST['ty_build']);
	$ty_sim=mysqli_real_escape_string($connect, $_REQUEST['ty_sim']);
	$mem_card_slot=mysqli_real_escape_string($connect, $_REQUEST['mem_card_slot']);
	$mem_internal=mysqli_real_escape_string($connect, $_REQUEST['mem_internal']);
	$cam_pri=mysqli_real_escape_string($connect, $_REQUEST['cam_pri']);
	$cam_feat=mysqli_real_escape_string($connect, $_REQUEST['cam_feat']);
	$cam_vedio=mysqli_real_escape_string($connect, $_REQUEST['cam_vedio']);
	$cam_sec=mysqli_real_escape_string($connect, $_REQUEST['cam_sec']);
	$fea_sen=mysqli_real_escape_string($connect, $_REQUEST['fea_sen']);
	$fea_mass=mysqli_real_escape_string($connect, $_REQUEST['fea_mass']);
	$fea_brow=mysqli_real_escape_string($connect, $_REQUEST['fea_brow']);
	$bat_cap=mysqli_real_escape_string($connect, $_REQUEST['bat_cap']);
	$bat_talk=mysqli_real_escape_string($connect, $_REQUEST['bat_talk']);
	$bat_mus=mysqli_real_escape_string($connect, $_REQUEST['bat_mus']);
	$misc_color=mysqli_real_escape_string($connect, $_REQUEST['misc_color']);
	$misc_sar=mysqli_real_escape_string($connect, $_REQUEST['misc_sar']);
	$misc_sareu=mysqli_real_escape_string($connect, $_REQUEST['misc_sareu']);
	
	$query = "INSERT INTO `table_product_detail` (`id`, `name`, `price`, `image`, `net_tec`, `body_dim`, `body_weight`, `body_build`, `body_sim`, `plat_os`, `plat_chip`, `plat_cpu`, `plat_gpu`, `ty_type`, `ty_weight`, `ty_build`, `ty_sim`, `mem_card_slot`, `mem_internal`, `cam_pri`, `cam_feat`, `cam_vedio`, `cam_sec`, `fea_sen`, `fea_mass`, `fea_brow` , `bat_cap`, `bat_talk`, `bat_mus`, `misc_color` ,`misc_sar`, `misc_sareu`) VALUES( NULL,'$Pname','$Pprice','$Pimage','$net_tec' ,'$body_dim','$body_weight','$body_build','$body_sim','$plat_os','$plat_chip','$plat_cpu','$plat_gpu','$ty_type','$ty_weight','$ty_build' ,'$ty_sim' ,'$mem_card_slot' ,'$mem_internal' ,'$cam_pri','$cam_feat','$cam_vedio','$cam_sec','$fea_sen' ,'$fea_mass' ,'$fea_brow' ,'$bat_cap' ,'$bat_talk','$bat_mus' ,'$misc_color' ,'$misc_sar' ,'$misc_sareu' )";
	if(mysqli_query($connect, $query)){
	    echo '<script>alert("Records inserted successfully..")</script>';
		echo "<script>window.location='addminadd.html'</script>";
	
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);

}
//	if($mysqli_query($query)){
//		echo'add sucessfully';
//	} 
}
 ?>  
 