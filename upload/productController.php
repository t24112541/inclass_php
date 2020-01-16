<?php 
	if(isset($_POST['btn_add'])){
		require_once("./conn.php");
		$target="./imageProduct/".date("YmdHis").".jpg";
		// echo "target :".$target;
		copy($_FILES['p_img']['tmp_name'],$target);
		$que=$conn->query("insert into product (p_name, p_amount, p_price, p_img,warehouse_id) values ('{$_POST['p_name']}','{$_POST['p_amount']}','{$_POST['p_price']}','{$target}','{$_POST['warehouse_id']}')");
		if(!$que){echo "insert error : ".$conn->error;header("refresh:2;url=addProduct.php");}
		else{echo "insert ok";header("refresh:1;url=showProduct.php");}
	}
?>