<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<img src="" width="100" id="sh_img"><p>
		<input type="file" name="img" onchange="sh_image(this)"><br>
		<input type="submit" name="btn_ok" value="ok">
	</form>
</body>
</html>
<?php 
if(isset($_POST['btn_ok'])){
	date_default_timezone_set("Asia/Bangkok");
	$exp=explode(".",$_FILES['img']['name']);
	$filename=$exp[0]."_".date("ymdHis").".".$exp[1];
	$target="./img/".$filename.".jpg";
	copy($_FILES['img']['tmp_name'], $target);
}
?>
<script type="text/javascript">
	function sh_image(image){
		var reader =new FileReader();
		reader.onload = function() {
			var output=document.getElementById('sh_img');
			output.src=reader.result;
		}
		reader.readAsDataURL(image.files[0]);

	}
</script>