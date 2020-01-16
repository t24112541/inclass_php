<?php 
	if(isset($_POST['btn'])){
		if($_POST['midterm']!="" && $_POST['final']!="" && $_POST['score']!="" && $_POST['name']!=""){
			$final=$_POST['final'];
			// echo settype($final, "integer");
			// echo gettype($final);
			if(gettype($final)!="integer"){$grade="คะแนนผิดพลาด";$final=0;$total=0;}
			else{
				$total=$_POST['midterm']+$final+$_POST['score'];
			$grade=($total<50?"F":($total<55?"D":($total<60?"D+":($total<65?"C":($total<70?"C+":($total<75?"B":($total<80?"B+":($total<100?"A":"คะแนนผิดพลาด"))))))));
			}
			
			
			// echo gettype($final);

			?>
				<table border="1">
					<tr>
						<td colspan="6">report</td>
					</tr>
					<tr>
						<td colspan="2">ชื่อ</td>
						<td colspan="4"><?=$_POST['name']?></td>
					</tr>
					<tr>
						<td colspan="1">กลางภาค</td>
						<td colspan="1">ปลายภาค</td>
						<td colspan="1">เก็บ</td>
						<td colspan="1">รวม</td>
						<td colspan="2">เกรด</td>
					</tr>
					<tr>
						<td colspan="1"><?=$_POST['midterm']?></td>
						<td colspan="1"><?=$_POST['final']?></td>
						<td colspan="1"><?=$_POST['score']?></td>
						<td colspan="1"><?=$total?></td>
						<td colspan="2"><?=$grade?></td>
					</tr>
				</table>
				<a href="?">ย้อนกลับ</a>
			<?php 
		}else{echo "<meta http-equiv='refresh' content='0;url=?'>";}
	}else{
?>
<form method="post">
	ชื่อ-นามสกุล : <input type="text" name="name"><br>

	คะแนนกลางภาค :
	<select name="midterm">
		<?php for($i=0;$i<=30;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>	
		<?php } ?>
	</select><br>

	คะแนนปลายภาค :<input type="password" name="final" maxlength="40" minlength="0"><br>
	คะแนนเก็บ	:<input type="number" name="score" id="score" min="0" max="30"><br>
	<input type="submit" value="ส่ง" name="btn" id="btn">
	<input type="reset" value="ล้าง" >
</form>
<?php } ?>