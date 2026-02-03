<?php
    $host = "localhost"; 
    $user = "root";
    $pws = "";
    $db = "4108db";
    
    $conn = mysqli_connect($host, $user, $pws, $db) or die ("Error: " . mysqli_connect_error());
    
    // ใช้ฟังก์ชันนี้แทนการ Query ตรงๆ เพื่อตั้งค่าภาษาไทย
    mysqli_set_charset($conn, "utf8"); 
?>