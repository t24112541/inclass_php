<?php 

if(isset($_GET['u_id'])){
	require_once("./connect.php");
	$sql="select * from cv_users where u_id='{$_GET['u_id']}'";
	$que=$conn->query($sql);
	if($que->num_rows>0){
		$sh=$que->fetch_array();
		header("Content-type:image/jpg");
		if($_GET['col']=="u_img_1"){echo $sh['u_img_1'];}
		else{echo $sh['u_img_2'];}
		// echo $sh["$col"];
		// echo $sh["u_img_1"];
	}
	

}
?>