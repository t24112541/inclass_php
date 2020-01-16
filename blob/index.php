
<?php 

// $html = file_get_contents('http://localhost/charn/blob/dataQuerySelector.html');
$html='<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>รหัส</th>
			<th>ชื่อ</th>
			<th>รูป</th>
		</tr>
	</table>
</body>
</html>';

$dom = new DOMDocument();
$dom->loadHTMLFile($html);

foreach ($elements as $element) {
	// echo "<p>". $element->nodeName. ": ";
}
// echo "<pre>";
// print_r($dom);
// echo "</pre>";
?>

