<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$host = "localhost";
	$user = "root";
	$pwd = "chinnapat";
	$db = "4108db";
	$conn = mysqli_connect("localhost","root","","4108db") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8");

?>

</body>
</html>