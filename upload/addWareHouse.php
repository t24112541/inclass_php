<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>รายละเอียดสถานที่</td>
				<td><textarea name="warehouse_detail" ></textarea></td>
			</tr>
			<tr>
				<td>รูป</td>
				<td><input type="file" name="warehouse_image" onchange="sh_img(this)"><p>
					<img id="pre_img" width="150">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_add" value="add warehouse"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<script type="text/javascript">
	function sh_img(img){
		var reader=new FileReader();
		reader.onload=function(){
			var out=document.getElementById('pre_img').src=reader.result;
			console.log("reader ");
			console.log(reader);
		}
		reader.readAsDataURL(img.files[0]);
	}
</script>
<?php 
if(isset($_POST['btn_add'])){
	require_once("./conn.php");
	$expo=explode(".",$_FILES['warehouse_image']['name']);
	$filename=date("YmdHis").".".$expo[1];
	$target="./imageWareHouse/".$filename;
	copy($_FILES['warehouse_image']['tmp_name'],$target);
	$que=$conn->query("insert into warehouse (warehouse_detail, warehouse_image) values ('{$_POST['warehouse_detail']}','{$target}')");
	if(!$que){echo "insert warehouse error : ".$conn->error;}
	else{header("refresh:0;url=showProduct.php");}
}
?>