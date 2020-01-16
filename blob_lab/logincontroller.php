<?php 
	require_once("./connect.php");
if(isset($_POST['btn_login'])){
	$sql="select u_id from cv_users where u_username='{$_POST['u_username']}' && u_password='{$_POST['u_password']}'";
	$que=$conn->query($sql);
	if($que->num_rows>0){
		$sh=$que->fetch_array();
		$_SESSION['u_id']=$sh['u_id'];
		header("refresh:0;url=showinfo.php");
	}else{
		echo "user not found.";
		header("refresh:2;url=showinfo.php");
	}
}
?>