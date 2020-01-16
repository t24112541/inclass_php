<meta charset="utf-8">
<form method="GET">
	<table >
		<tr>
			<td align="center" colspan="2">get post</td>
		</tr>
		<tr>
			<td>ชื่อ :</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>เบอร์โทร :</td>
			<td><input type="number" name="tel"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><button type="submit" name="btn">ไป</button></td>
		</tr>
	</table>
</form>
<?php 	
	if(isset($_GET['btn'])){
		if($_GET['name']!="" && $_GET['tel']!=""){
			echo "ชื่อ : ".$_GET['name']."<br>เบอร์โทร : ".$_GET['tel'];
		}
	}
?>