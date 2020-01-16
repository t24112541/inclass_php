<center><h1>show cars</h1></center><p>
<a href="car_index.php">index</a>
<hr>



<form method="POST">
	<table>
		<tr>
			<td>รถ</td>
			<td>
				<select name="car_id">
<?php 
require_once("./car.controller.php");
$car=new controller();
// var_dump($car->show_car());
foreach ($car->show_car() as $key =>$value) { ?>
					<option value="<?=$key?>"><?=$value['car_brand']." ".$value['car_model']." ".$value['car_color']." ".$value['car_year'];?></option>
<?php }?>
				</select>
			</td>
		</tr>
		<tr>
			<td>เจ้าของ</td>
			<td><input type="text" name="car_owner"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="btn_save" value="save"></td>
		</tr>
	</table>
</form>
<?php 
if(isset($_POST['btn_save'])){
	$car->add_owner($_POST['car_id'],$_POST['car_owner']);
	header("refresh:0;url=car.show.php");
}
?>