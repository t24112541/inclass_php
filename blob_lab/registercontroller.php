<?php require_once("./connect.php");
if(isset($_POST['btn_regist'])){
	$u_img_1=addslashes(file_get_contents($_FILES['u_img_1']['tmp_name']));
	$u_img_2=addslashes(file_get_contents($_FILES['u_img_2']['tmp_name']));

	$sql="insert into cv_users (u_id,u_name,u_username,u_password,u_img_1,u_img_2) values ('{$_POST['u_id']}','{$_POST['u_name']}','{$_POST['u_username']}','{$_POST['u_password']}','{$u_img_1}','{$u_img_2}')";
	if($conn->query($sql)){
		echo "register success.";
		header("refresh:2;url=index.php");
	}else{echo "error :".$conn->error;}
}
?>