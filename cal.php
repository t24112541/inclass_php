
<form method="get">
	<input type="number" name="num1">
	<select name="op">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="number" name="num2"><br>
	<input type="submit" value="ok" name="btn">
</form>
<?php
if(isset($_GET['btn'])){
	$num1=$_GET['num1'];
	$op=$_GET['op'];
	$num2=$_GET['num2'];
	echo "$num1 $op $num2 = ";
	echo ($op=="+"?$num1+$num2:($op=="-"?$num1-$num2:($op=="*"?$num1*$num2:($op=="/"?$num1/$num2:"error"))));
}
?>