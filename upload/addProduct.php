<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="./productController.php">
		<table border="1">
			<tr>
				<td>สถานที่</td>
				<td>
					<select name="warehouse_id" required>
					<?php require_once("./conn.php"); foreach($conn->query("select * from warehouse") as $sh){?>
						<option value="<?=$sh['warehouse_id']?>"><?=$sh['warehouse_detail']?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>ชื่อสินค้า</td>
				<td><input type="text" name="p_name" required></td>
			</tr>
			<tr>
				<td>จำนวนสินค้า</td>
				<td><input type="text" name="p_amount" required></td>
			</tr>
			<tr>
				<td>ราคาสินค้า</td>
				<td><input type="text" name="p_price" required></td>
			</tr>
			<tr>
				<td>รูปสินค้า</td>
				<td><input type="file" name="p_img" onchange="sh_img(this)" required><p>
					<img id="pre_img" width="100">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_add" value="Add"> <a href="./showProduct.php" >back</a></td>
			</tr>
		</table>
	</form>
</body>
</html>
<script type="text/javascript">
	function sh_img(img){
		var reader=new FileReader();
		reader.onload=function(){
			var out=document.getElementById('pre_img');
			out.src=reader.result;
		}
		reader.readAsDataURL(img.files[0]);
	}
</script>