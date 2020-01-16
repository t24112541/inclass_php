<?php 
	require("connect.php");
	$sql="select * from img order by img_id desc";
	$que=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="3">
		<tr>
			<th>รหัส</th>
			<th>ชื่อ</th>
			<th>รูป</th>
		</tr>

		<?php foreach ($que as  $sh ) 
		{?>
		<tr>
			<td><a href="convert_binary.php?img_id=<?=$sh['img_id']?>"><?=$sh['img_id']?></td>
			<td><?=$sh['img_name']?></td>
			<td><img src="convert_binary.php?img_id=<?=$sh['img_id']?>" width="400" b></td>		
		</tr>
		<?php }?>
	</table>
</body>
</html>

