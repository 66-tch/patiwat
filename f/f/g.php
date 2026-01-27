<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
</head>
<h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>
<form method="post" action="">
แม่สูตรคูณ <input type="number" name="a" autofocus required min="2" max="1000">
<button type="submit" name="Submit">OK</button>
</form>

<?php
if(isset($_POST["Submit"])) {
	
	$m = $_POST['a'] ;
	
	for($i = 1; $i <= 12; $i++) {
		$b = $m * $i ;
		echo "{$m} x {$i} = {$b} <br>" ;
	}
}
?>
<body>
</body>
</html>