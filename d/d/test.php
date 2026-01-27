<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น) - แบบฟอร์มลงทะเบียน</title>

<style>
/* --- Global Styles (ปรับปรุง) --- */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #eef2f7; 
    color: #34495e; 
    padding: 20px;
    line-height: 1.6;
    /* ลบพื้นหลังสีออกจาก body เพื่อให้ background-overlay ทำงานแทน */
}

/* --- ส่วนใหม่: Background Overlay สำหรับ Tenor Embed --- */
.background-overlay {
    /* ทำให้ครอบคลุมทั้งหน้าจอและคงที่ */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1; /* สำคัญ: ให้ไปอยู่ด้านหลังสุด */
    
    /* ปรับปรุงภาพให้เต็มจอและคงที่ */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* --- Container (ปรับปรุง) --- */
.container {
    max-width: 550px;
    margin: 40px auto;
    /* เพิ่มความโปร่งใสเล็กน้อยเพื่อให้เห็นพื้นหลัง GIF */
    background: rgba(255, 255, 255, 0.95); /* เดิม: #ffffff */
    padding: 35px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    position: relative; /* เพื่อให้เนื้อหาอยู่เหนือพื้นหลัง */
    z-index: 1; 
}

/* CSS ส่วนอื่นๆ เหมือนเดิม ... */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #2c3e50;
}

.form-group input:not([type="color"]),
.form-group select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
    outline: none;
}

.form-group input[type="color"] {
    width: 60px;
    height: 40px;
    border: none;
    padding: 0;
    margin-top: 5px;
    cursor: pointer;
    vertical-align: middle;
}

.button-group {
    text-align: center;
    margin-top: 30px;
}

.button-group button {
    padding: 10px 20px;
    margin: 0 8px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    transition: background-color 0.3s, transform 0.2s;
}

.button-group button:hover {
    transform: translateY(-2px);
}

.submit-btn {
    background-color: #2ecc71; 
    color: white;
}

.submit-btn:hover {
    background-color: #27ae60;
}

.reset-btn {
    background-color: #e74c3c; 
    color: white;
}

.reset-btn:hover {
    background-color: #c0392b;
}

.info-btn {
    background-color: #95a5a6; 
    color: white;
}

.info-btn:hover {
    background-color: #7f8c8d;
}

.output-section {
    margin-top: 35px;
    padding: 20px 0;
    border-top: 2px solid #ecf0f1; 
}

.output-section h3 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 20px;
}

.output-table {
    width: 100%;
    border-collapse: collapse;
}

.output-table th, .output-table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ecf0f1;
}

.output-table th {
    background-color: #f7f9fb; 
    font-weight: 600;
    width: 35%;
    color: #34495e;
}

.color-box {
    display: inline-block;
    width: 25px;
    height: 25px;
    border: 2px solid #bdc3c7; 
    border-radius: 4px;
    vertical-align: middle;
    margin-left: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}
</style>
</head>

<body>
<div class="background-overlay">
    <div class="tenor-gif-embed" data-postid="2466233215431413221" data-share-method="host" data-aspect-ratio="1" data-width="100%" data-height="100%">
        <a href="https://tenor.com/view/ive-gaeul-kpop-kim-gaeul-k-pop-gif-2466233215431413221">Ive Gaeul GIF</a> from <a href="https://tenor.com/search/ive-gifs">Ive GIFs</a>
    </div>
    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
</div>
<div class="container">
    <header>
        <h1>ลงทะเบียนสมาชิก</h1>
        <h2>ปฏิวัติ มาตวัน (มายมิ้น)</h2>
    </header>

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
            <button type="submit" name="Submit" class="submit-btn">สมัครสมาชิก</button>
            <button type="reset" class="reset-btn">ยกเลิก/รีเซ็ต</button>
            <button type="button" class="info-btn" onClick="window.open('https://www.chatgpt.com', '_blank');">ไปที่ ChatGPT</button>
        </div>
    </form>
    
    <?php
    // --- ส่วน PHP แสดงผลลัพธ์ ---
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