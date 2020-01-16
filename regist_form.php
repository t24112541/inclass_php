

<?php
	if(isset($_POST['btn_regist'])){ 
		if($_POST['f_name']!="" && $_POST['l_name']!="" && $_POST['bd']!=""&& $_POST['region']!=""&& $_POST['weigh']!=""&& $_POST['height']!=""&& $_POST['address']!=""&& $_POST['tell']!=""){
			if(settype($_POST['tell'], "integer")) {
				if($_POST['tell']==0){$tell="ข้อมูลผิดพลาด";}
				else{$tell=$_POST['tell'];}
			}
?>
			<div class="container" style="margin-top:5%">
				<h2>แบบฟอร์มสำหรับสมัครเรียน</h2>
				<hr>
				<b>คำชี้แจง :: </b>ตรวจสอบข้อมูล
				<form method="post" >
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" >ชื่อ</span>
						</div>
						<input type="text" class="form-control" value="<?=$_POST['pre_name'].$_POST['f_name'].' '.$_POST['l_name'];?>"  required>
					</div>
					
					<div class="input-group mb-3" >
						<div class="input-group-prepend">
							<span class="input-group-text" >เพศ</span>
						</div>
						<input type="text" class="form-control" value="<?=$_POST['gender']?>" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" >วันเดือนปี เกิด (ว/ด/ป) </span>
						</div>
						<input type="text" name="bd" class="form-control" value="<?=$_POST['bd']?>" required>
						<div class="input-group-prepend">
							<span class="input-group-text" >นับถือศาสนา</span>
						</div>
						<input type="text" name="region" class="form-control" value="<?=$_POST['region']?>" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" >น้ำหนัก</span>
						</div>
						<input type="number" name="weigh" maxlength="2" class="form-control" value="<?=$_POST['weigh']?>" required>
						<div class="input-group-prepend">
							<span class="input-group-text" >กิโลกรัม ส่วนสูง </span>
						</div>
						<input type="number" name="height" maxlength="3" class="form-control" value="<?=$_POST['height']?>" required>
						<div class="input-group-prepend">
							<span class="input-group-text" >เซนติเมตร</span>
						</div>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" >ที่อยู่</span>
						</div>
						<textarea rows="5" name="address" cols="70" class="form-control" required><?=$_POST['address']?></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" >เบอร์โทรศัพท์</span>
						</div>
						<input type="text" name="tell" id="tell" maxlength="10" class="form-control " value="<?=$tell?>">
					</div>
					<div class="input-group mb-3" >
						<div class="input-group-prepend">
							<span class="input-group-text" >ความสามารถพิเศษ</span>
						</div>
						<?php 
							if(isset($_POST['spc1']) && $_POST['spc1']!=""){echo " <div class='col-sm-2'>".$_POST['spc1']."</div>"; }
							if(isset($_POST['spc2']) && $_POST['spc2']!=""){echo " <div class='col-sm-2'>".$_POST['spc2']."</div>"; }
							if(isset($_POST['spc3']) && $_POST['spc3']!=""){echo " <div class='col-sm-2'>".$_POST['spc3']."</div>"; }
						?>
					</div>

				</form>
			</div>

			
<?php	}else{echo "กรุณากรอกข้อมูลให้ครบทุกช่อง  <meta http-equiv='refresh' content='3;url=?'>";}

	}else{
?>
<div class="container">
	<h2>แบบฟอร์มสำหรับสมัครเรียน</h2>
	<hr>
	<b>คำชี้แจง :: </b>กรุณากรอกข้อมูลให้ครบทุกช่องแล้วคลิกปุ่ม สมัครเรียน
	<form method="post">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" >คำนำหน้าชื่อ</span>
			</div>
			<select name="pre_name" class="form-control">
					<option value="เด็กชาย">เด็กชาย</option>
					<option value="เด็กหญิง">เด็กหญิง</option>
					<option value="นาง">นาง</option>
					<option value="นางสาว">นางสาว</option>
					<option value="นาย">นาย</option>
				</select>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" >ชื่อ</span>
			</div>
			<input type="text" name="f_name" class="form-control">
			<div class="input-group-prepend">
				<span class="input-group-text" >นามสกุล</span>
			</div>
			<input type="text" name="l_name" class="form-control"><br>
		</div>
		<div class="input-group mb-3" >
			<div class="input-group-prepend">
				<span class="input-group-text" >เพศ</span>
			</div>
			<div class="col-sm-3"><label><input type="radio" name="gender" value="ชาย" checked> ชาย </label></div>
			<div class="col-sm-3"><label><input type="radio" name="gender" value="หญิง"> หญิง </label></div>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" >วันเดือนปี เกิด (ว/ด/ป) </span>
			</div>
			<input type="text" name="bd" class="form-control">
			<div class="input-group-prepend">
				<span class="input-group-text" >นับถือศาสนา</span>
			</div>
			<input type="text" name="region" class="form-control">
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" >น้ำหนัก</span>
			</div>
			<input type="number" name="weigh" maxlength="2" class="form-control">
			<div class="input-group-prepend">
				<span class="input-group-text" >กิโลกรัม ส่วนสูง </span>
			</div>
			<input type="number" name="height" maxlength="3" class="form-control">
			<div class="input-group-prepend">
				<span class="input-group-text" >เซนติเมตร</span>
			</div>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" >ที่อยู่</span>
			</div>
			<textarea rows="5" name="address" cols="70" class="form-control"></textarea>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" >เบอร์โทรศัพท์</span>
			</div>
			<input type="text" name="tell" maxlength="10" class="form-control">
		</div>
		<div class="input-group mb-3" >
			<div class="input-group-prepend">
				<span class="input-group-text" >ความสามารถพิเศษ</span>
			</div>
			<div class="col-sm-3"><label><input type="checkbox" name="spc1" value="กีฬา"> กีฬา </label></div>
			<div class="col-sm-3"><label><input type="checkbox" name="spc2" value="ศิลปะ"> ศิลปะ </label></div>
			<div class="col-sm-3"><label><input type="checkbox" name="spc3" value="คอมพิวเตอร์"> คอมพิวเตอร์  </label></div>
		</div>
		<div class="col-sm-12"><center>
			<button type="submit" name="btn_regist" class="btn btn-success"> สมัครเรียน</button> <button type="reset" name="btn_reset" class="btn btn-danger">ยกเลิก</button>
		</div>
			
	</form>
</div>
<?php } ?>
<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="./js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>