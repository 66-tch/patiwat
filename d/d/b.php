<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
</head>

<body>
<h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>

<form method="post" action="">
ชื่อ-นามสกุล <input type="text" name="fullname" required autofocus><br>
เบอร์โทร <input type="text" name="phone" required> <br>
ความสูง <input type="number" step="5" name="height" max="300" min="80" required>ซม.<br>
สี <input type="color" name="color">สีที่ชอบ<br>

สาขาวิชา
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
    <option value="การจัดการ">การจัดการ</option>
    <option value="การตลาด">การตลาด</option>
    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select><br>

<!--<input type="submit" name="Submit" value="สมัตรสมาชิก">-->
<button type="submit" name="Submit">สมัครสมาชิก</button>
<button type="reset">Reset</button>
<button type="button" onclick="window.location='https://www.msu.ac.th';">Go to MSU</button>
<button type="button" onclick="window.print();">พิมพ์</button>

</form>
<hr>

<?php
if (isset($_POST['Submit'])){
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$height = $_POST['height'];
	$color = $_POST['color'];
	$major = $_POST['major'];
	
	echo "ชื่อ-สกุล".$fullname."<br>";
	echo "เบอร์โทร".$phone."<br>";
	echo "ความสูง".$height."<br>";
	echo "สีที่ชอบ".$color."<div style='background:{$color}'> . <br>";
	echo "สาขาวิชา".$major."<br>";
}
?>
</body>
</html>
