<center><h1>add car</h1></center><p>
	<center>
<a href="car_index.php">index</a>
<hr>

<form method="POST">
	<table>
		<tr>
			<td>brand</td>
			<td><input type="text" name="car_brand"></td>
		</tr>
		<tr>
			<td>model</td>
			<td><input type="text" name="car_model"></td>
		</tr>
		<tr>
			<td>color</td>
			<td><input type="text" name="car_color"></td>
		</tr>
		<tr>
			<td>year</td>
			<td><input type="text" name="car_year"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="btn_add" value="add"></td>
		</tr>
	</table>
</form>
<?php 
require_once("./car.controller.php");
$car=new controller();
if(isset($_POST['btn_add'])){
	$car->add_car($_POST['car_brand'],$_POST['car_model'],$_POST['car_color'],$_POST['car_year']);
	header("refresh:0;url=car_index.php?show_car");

}
?>