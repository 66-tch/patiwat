<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น) - แบบฟอร์มลงทะเบียน</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #007bff;
        margin-bottom: 30px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* สำคัญ: เพื่อให้ padding ไม่ขยายความกว้างเกิน */
    }
    .form-group input[type="color"] {
        padding: 0;
        height: 40px;
    }
    .button-group {
        text-align: center;
        margin-top: 20px;
    }
    .button-group button {
        padding: 10px 20px;
        margin: 0 5px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .button-group button[type="submit"] {
        background-color: #28a745;
        color: white;
    }
    .button-group button[type="reset"] {
        background-color: #dc3545;
        color: white;
    }
    .output-section {
        margin-top: 30px;
        padding: 20px;
        border-top: 2px solid #ccc;
    }
    .output-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    .output-table th, .output-table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    .output-table th {
        background-color: #f2f2f2;
        width: 30%;
    }
    .color-box {
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 1px solid #000;
        vertical-align: middle;
        margin-left: 5px;
    }
</style>
</head>

<body>
<div class="container">

    <h1>ฟอร์มสมัครสมาชิก ปฏิวัติ มาตวัน(มายมิ้น)-Gemini AI</h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="fullname">ชื่อ-นามสกุล</label>
            <input type="text" id="fullname" name="fullname" required autofocus>
        </div>

        <div class="form-group">
            <label for="phone">เบอร์โทรศัพท์</label>
            <input type="text" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="height">ความสูง (ซม.)</label>
            <input type="number" id="height" name="height" step="5" max="300" min="80" required>
        </div>

        <div class="form-group">
            <label for="major">สาขาวิชา</label>
            <select id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="การตลาด">การตลาด</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="color">สีที่ชอบ</label>
            <input type="color" id="color" name="color">
        </div>
        
        <div class="button-group">
            <button type="submit" name="Submit">สมัครสมาชิก</button>
            <button type="reset">ยกเลิก/รีเซ็ต</button>
            <button type="button" onClick="window.open('https://www.chatgpt.com', '_blank');">ไปที่ ChatGPT</button>
        </div>
    </form>
    
    <?php
    if (isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];
    ?>
    
    <div class="output-section">
        <h3>✅ ข้อมูลที่ลงทะเบียนเรียบร้อยแล้ว</h3>
        <table class="output-table">
            <tr>
                <th>ชื่อ-นามสกุล</th>
                <td><?php echo htmlspecialchars($fullname); ?></td>
            </tr>
            <tr>
                <th>เบอร์โทรศัพท์</th>
                <td><?php echo htmlspecialchars($phone); ?></td>
            </tr>
            <tr>
                <th>ความสูง</th>
                <td><?php echo htmlspecialchars($height); ?> ซม.</td>
            </tr>
            <tr>
                <th>สาขาวิชา</th>
                <td><?php echo htmlspecialchars($major); ?></td>
            </tr>
            <tr>
                <th>สีที่ชอบ</th>
                <td>
                    <?php echo htmlspecialchars($color); ?> 
                    <div class="color-box" style="background-color: <?php echo htmlspecialchars($color); ?>;"></div>
                </td>
            </tr>
        </table>
    </div>

    <?php
    }
    ?>
</div>
</body>
</html>