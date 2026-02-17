<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
</head>

<?php
    include_once("connectdb.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM provinces WHERE p_id='{$id}'";
    mysqli_query($conn, $sql) or die("ลบไม่ได้");

    echo "<script>";
    echo "window.location='b.php';";
    echo "</script>";

?>