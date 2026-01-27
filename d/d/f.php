<?php
// ชื่อไฟล์ที่จะบันทึก
$filename = "apply.txt";

// ตรวจสอบว่ามีการส่งฟอร์ม
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // รับค่าจากฟอร์ม
    $prefix     = $_POST['prefix'];
    $fullname   = $_POST['fullname'];
    $position   = $_POST['position'];
    $birthdate  = $_POST['birthdate'];
    $education  = $_POST['education'];

    // รูปแบบข้อความ
    $data  = "-----------------------------\n";
    $data .= "คำนำหน้า: $prefix\n";
    $data .= "ชื่อ-สกุล: $fullname\n";
    $data .= "ตำแหน่งที่สมัคร: $position\n";
    $data .= "วันเดือนปีเกิด: $birthdate\n";
    $data .= "ระดับการศึกษา: $education\n";
    $data .= "วันที่ส่ง: " . date("Y-m-d H:i:s") . "\n";
    $data .= "-----------------------------\n\n";

    // ถ้าไฟล์ยังไม่เคยมี จะเพิ่ม BOM UTF-8
    if (!file_exists($filename)) {
        file_put_contents($filename, "\xEF\xBB\xBF");
    }

    // แปลงเป็น UTF-8 (ป้องกันปัญหาตัวอักษรเสีย) แล้วบันทึก
    file_put_contents($filename, mb_convert_encoding($data, 'UTF-8', 'auto'), FILE_APPEND | LOCK_EX);

    $success = "บันทึกข้อมูลเรียบร้อยแล้ว!";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มสมัครงาน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 480px;
            background: #fff;
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 { text-align: center; margin-top: 0; }

        label { font-weight: bold; }

        input, select {
            width: 100%;
            padding: 12px;
            margin: 6px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #0066ff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover { background: #0052cc; }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>ฟอร์มสมัครงาน</h2>

    <?php if (isset($success)) { ?>
        <div class="success"><?php echo $success; ?></div>
    <?php } ?>

    <form method="POST">

        <label>คำนำหน้า</label>
        <select name="prefix" required>
            <option value="">-- เลือกคำนำหน้า --</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>

        <label>ชื่อ - สกุล</label>
        <input type="text" name="fullname" placeholder="เช่น สมชาย ใจดี" required>

        <label>ตำแหน่งที่สมัคร</label>
        <input type="text" name="position" placeholder="เช่น โปรแกรมเมอร์" required>

        <label>วันเดือนปีเกิด</label>
        <input type="date" name="birthdate" required>

        <label>ระดับการศึกษา</label>
        <select name="education" required>
            <option value="">-- เลือกระดับการศึกษา --</option>
            <option value="มัธยมศึกษา">มัธยมศึกษา</option>
            <option value="ปวช.">ปวช.</option>
            <option value="ปวส.">ปวส.</option>
            <option value="ปริญญาตรี">ปริญญาตรี</option>
            <option value="ปริญญาโท">ปริญญาโท</option>
            <option value="ปริญญาเอก">ปริญญาเอก</option>
        </select>

        <button type="submit">ส่งใบสมัคร</button>
    </form>
</div>

</body>
</html>
