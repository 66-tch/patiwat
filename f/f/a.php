<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
</head>

<body>
<h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>
<!---<h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>--->

<?php
		echo "บทที่ 10 PHP เบื้องต้น <br>";
		print "วิชา Web Programming <br>";
		
		$name = "Patiwat Matwan"; #"$" คือการประกาศตัวแปร ตัวแปรห้ามขึ้นต้นด้วยตัวเลข
		$age = "22";
		#$name .= "Patibat";
		
		echo gettype($age);
		echo "<hr>";
		var_dump($name);
		echo "<br>";
		var_dump($age);
		echo "<hr>";
		
		echo $name;
		echo "<hr>";
		
		$a = "10";
		$b = "5";
		$c = "2";
		$x = $a / ($b * $c);
		echo "มีค่าเท่ากับ $x";
		
		
?>
</body>
</html>