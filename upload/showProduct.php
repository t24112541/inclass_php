<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="./addProduct.php">addProduct</a><p>
	<a href="./addWareHouse.php">addWareHouse</a><p>
	<table>
		<tr>
			<td>สถานที่</td>
			<td>รูปสถานที่</td>
			<td>ชื่อสินค้า</td>
			<td>จำนวนสินค้า</td>
			<td>ราคาสินค้า</td>
			<td>รูปสินค้า</td>
		</tr>
<?php require_once("./conn.php");
	$que=$conn->query("select * from product,warehouse where product.warehouse_id=warehouse.warehouse_id order by rand()");
	foreach ($que as $sh) {
?>
		<tr>
			<td><?=$sh['warehouse_detail']?></td>
			<td><img src="<?=$sh['warehouse_image']?>" width="100"></td>
			<td><?=$sh['p_name']?></td>
			<td><?=$sh['p_amount']?></td>
			<td><?=$sh['p_price']?></td>
			<td><img src="<?=$sh['p_img']?>" width="100"></td>
		</tr>
<?php } ?>
	</table>
</body>
</html>