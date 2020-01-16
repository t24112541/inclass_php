<?php
require_once("./connect.php");
if(isset($_GET['img_id'])){
	$sql="select * from img where img_id='{$_GET['img_id']}'";
	// echo $sql;
	$que=$conn->query($sql);
	if($que->num_rows>0){
		$sh=$que->fetch_array();
		header("Content-type:image/jpg");
		echo $sh['img_data'];
	}
}
?>