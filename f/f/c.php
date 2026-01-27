<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
</head>

<body>
<h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>
<form method="post" action="">
กรอกคะแนน <input type="number" name="a" autofocus required min="0" max="100">
<button type="submit" name="Submit">OK</button>
</form>

<?php
if (isset($_POST["Submit"])) {
	echo "<hr>";
	$score = $_POST['a'];
	
	if ($score >= 80) {
	echo "ได้ ($score) คะแนน เกรด A คุณนั้นเจ๋งแจ๋ว";
	} else if($score >= 75) {
		echo "ได้ ($score) คะแนน เกรด B+";
	} else if($score >= 70) {
		echo "ได้ ($score) เกรด B";
	} else if($score >= 65) {
		echo "ได้ ($score) คะแนน เกรด C+";
	} else if($score >= 60) {
		echo "ได้ ($score) คะแนน เกรด C  ";
	} else if($score >= 55) {
		echo "ได้ ($score) คะแนน เกรด D+ ดีขึ้นมาหน่อย";
	} else if($score >= 50) {
		echo "ได้ ($score) คะแนน เกรด D ได้แต่ไม่ดี";
	} else {
		echo "ได้ ($score) คะแนน เกรด F ลาออกไปซะ";
	}

}
?>
</body>
</html>