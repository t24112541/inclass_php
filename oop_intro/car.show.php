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
<?php 
	require_once("./car.controller.php");
	$car=new controller();

if(isset($_GET['show_detail'])){
	 $value=$car->show_car_where($_GET['show_detail']);
	 $value["car_brand"];
?>
<center><h1>show car</h1></center><p>
<a href="car_index.php">index</a>
<hr>
		<table class="box" width="50%" border="1" >
			<tr >
				<td style="padding:4px">brand</td>
				<td><?=$value['car_brand'];?></td>
			</tr>
			<tr>
				<td  style="padding:4px">model</td>
				<td><?=$value['car_model'];?></td>
			</tr>
			<tr>
				<td style="padding:4px">color</td>
				<td><?=$value['car_color'];?></td>
			</tr>
			<tr>
				<td style="padding:4px">year</td>
				<td><?=$value['car_year'];?></td>
			</tr>
			<tr>
				<td style="padding:4px">owner</td>
				<td>
<?php foreach ($car->show_owner_where($_GET['show_detail']) as $key => $value) {?>
					<?=@$value['car_owner']."<br>";?>
<?php }?>				
				</td>
			</tr>
		</table>
<?php 



}else{ ?>
	<center><h1>show cars</h1></center><p>
	<a href="car_index.php">index</a>
	<hr>
	<table width="100%">
			<tr>
				<th>car_brand</th>
				<th>car_model</th>
				<th>car_color</th>
				<th>car_year</th>
				<th>car_owner</th>
				<th>detail</th>
			</tr>
	<?php foreach ($car->show_car() as $key =>$value) { ?>
			<tr>
				<td align="center"><?=@$value['car_brand'];?> </td>
				<td align="center"><?=@$value['car_model'];?> </td>
				<td align="center"><?=@$value['car_color'];?> </td>
				<td align="center"><?=@$value['car_year'];?></td>
				<td align="center"><?=@$value['car_owner'];?></td>
				<td align="center"><a href="?show_detail=<?=$key;?>"><?=$key;?></a></td>
			</tr>
	<?php }?>
	</table>
<?php } ?>