<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>

<style>
    body {
        font-family: "Prompt", sans-serif;
        background: #f7f7f7;
        padding: 20px;
    }
    .container {
        background: #fff;
        padding: 20px;
        max-width: 450px;
        margin: auto;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    input, select, button {
        margin-top: 8px;
        padding: 8px;
        width: 100%;
        font-size: 16px;
    }
    button {
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }
    .submit-btn { background: #4CAF50; color: white; }
    .reset-btn { background: #f44336; color: white; margin-top: 5px; }
    .other-btn { background: #2196F3; color: white; margin-top: 5px; }
    hr {
        margin: 30px 0;
    }
    .result-box {
        background: #fff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
        max-width: 450px;
        margin: auto;
    }
</style>

</head>

<body>

<div class="container">
<h1>ฟอร์มสมัครสมาชิก ปฏิวัติ มาตวัน(มายมิ้น)-ChatGPT</h1>

<form method="post" action="">
    <label>ชื่อ-นามสกุล</label>
    <input type="text" name="fullname" required autofocus>

    <label>เบอร์โทร</label>
    <input type="text" name="phone" required>

    <label>ความสูง (ซม.)</label>
    <input type="number" step="5" name="height" min="80" max="300" required>

    <label>สีที่ชอบ</label>
    <input type="color" name="color">

    <label>สาขาวิชา</label>
    <select name="major">
        <option value="การบัญชี">การบัญชี</option>
        <option value="การจัดการ">การจัดการ</option>
        <option value="การตลาด">การตลาด</option>
        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
    </select>

    <button type="submit" name="Submit" class="submit-btn">สมัครสมาชิก</button>
    <button type="reset" class="reset-btn">ล้างข้อมูล</button>
    <button type="button" class="other-btn" onclick="alert('Hello from ChatGPT!')">xxx</button>
</form>
</div>

<hr>

<?php
if (isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    $major = $_POST['major'];

	include_once("connectdb.php");
	
	$sql = "INSERT INTO register (r_id, r_name, r_Phone, r_height, r_color, r_major) VALUES (null, '{$fullname}', '{$phone}', '{$height}', '{$color}', '{$major}');";
	mysqli_query($conn, $sql) or die ("insert ไม่ได้");
	
	echo "<script>";
	echo "alert('เพิ่มสำเร็จ')";
	echo "</scipt>";
}
?>
<?php
include_once("connectdb.php");

$sql_show = "SELECT * FROM register ORDER BY r_id DESC";
$result = mysqli_query($conn, $sql_show);
?>

<div class="result-box">
    <h2 style="text-align:center;">รายชื่อผู้สมัคร</h2>

    <table border="1" width="100%" cellpadding="5" cellspacing="0">
        <tr style="background:#eee;">
            <th>ลำดับ</th>
            <th>ชื่อ-นามสกุล</th>
            <th>เบอร์โทร</th>
            <th>ความสูง</th>
            <th>สีที่ชอบ</th>
            <th>สาขาวิชา</th>
        </tr>

        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td align="center"><?php echo $i++; ?></td>
            <td><?php echo $row['r_name']; ?></td>
            <td><?php echo $row['r_Phone']; ?></td>
            <td align="center"><?php echo $row['r_height']; ?></td>
            <td align="center">
                <div style="width:30px;height:20px;background:<?php echo $row['r_color']; ?>;"></div>
            </td>
            <td><?php echo $row['r_major']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>


</body>
</html>
