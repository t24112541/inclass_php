<?php 
require_once("./car.controller.php");
$car=new controller();
?>
<style>
	.btn{
		padding:10px;
		border-radius:4px;
		background-color: #ececec;
	}
	.box{
		margin-top:10%;
	}
</style>
<center>
	<p>
<table class="box">
	
	<tr>
		<td style="padding:10px"><a class="btn" href='car.add.php'>add car</a></td>
	</tr>
	<tr>
		<td style="padding:10px"><a class="btn" href='car.owner.php'>add owner</a></td>
	</tr>
	<tr>
		<td style="padding:10px"><a class="btn" href='car.show.php'>show_car</a></td>	
	</tr>
	<tr>
		<td style="padding:10px"><a class="btn" href='?clear'>clear</a></td>
	</tr>
</table>
<?php 
// $car->sh_lenght();
// if(isset($_GET['show_car'])){
// 	echo "<pre>";
// 	var_dump($car->show_car());
// 	echo "</pre>";
// }
// if(isset($_GET['clear'])){
// 	$car->clear_sess();
// 	header("refresh:0;url=?");
// }

?>