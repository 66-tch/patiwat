<?php
    session_start(); // เปิดไว้ที่นี่ที่เดียวพอครับ
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login : ปฏิวัติ มาตวัน(มายมิ้น)</title>
</head>
<body>

<h1>เข้าสู่ระบบหลังบ้าน : ปฏิวัติ มาตวัน(มายมิ้น)</h1>
<form method="post" action="">
    Username: <input type="text" name="auser" autofocus required><br>
    Password: <input type="password" name="apwd" required><br>
    <button type="submit" name="Submit">Login</button>
</form>

<?php
if(isset($_POST["Submit"])){
    include_once("connectdb.php"); // อย่าลืมไปลบ session_start() ในไฟล์นี้ออกนะครับ
    
    $user = $_POST['auser'];
    $pwd = $_POST['apwd'];

    // ใช้ Prepared Statement เพื่อความปลอดภัย
    $stmt = mysqli_prepare($conn, "SELECT * FROM admin WHERE a_username = ? AND a_password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $user, $pwd);
    mysqli_stmt_execute($stmt);
    $rs = mysqli_stmt_get_result($stmt);
    $num = mysqli_num_rows($rs);

    if($num == 1){
        $data = mysqli_fetch_array($rs);
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];
        
        // แก้ไข Tag Script ให้ถูกต้อง
        echo "<script>
                window.location='index2.php';
              </script>";
    } else {
        echo "<script>
                alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
                window.history.back();
              </script>";
    }
}
?>
</body>
</html>