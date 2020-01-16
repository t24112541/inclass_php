<form action="" method="POST" enctype="multipart/form-data">
	<!-- <input type="text" name="img_name" placeholder="ชื่อ"><p> -->
	<input type="file" name="img_data" ><p>
	<input type="submit" name="btn_ok" value="upload">
</form>

<?php require_once("./connect.php");
if(isset($_POST['btn_ok'])){
	$img_name=$_FILES["img_data"]["name"];
	$img=$_FILES["img_data"]["tmp_name"];
	
	$img_content=addslashes(file_get_contents($img));	//addslashes  สับ code การทำงานกรณีไฟล์ที่ส่งเข้ามาเป็นโปรแกรมอะไรซักอย่าง

	$sql="insert into img (img_name,img_data) values('".$img_name."','".$img_content."')";
	$que=$conn->query($sql);
	if(!$que){echo "insert error :".$conn->error;}
	else{echo "upload complete";echo "<p><a href='list.php'>ดูรูปภาพ<a>";}
}?>