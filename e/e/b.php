<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มรับสมัครงาน | Job Application</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>
<body class="flex items-center justify-center py-10 px-4">

    <div class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl overflow-hidden">
        
        <div class="bg-blue-600 p-8 text-center">
            <h1 class="text-3xl font-bold text-white mb-2">ใบสมัครงานออนไลน์</h1>
            <p class="text-blue-100">กรุณากรอกข้อมูลให้ครบถ้วนเพื่อประกอบการพิจารณา</p>
        </div>

        <form id="applicationForm" method="post" action="" class="p-8 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="md:col-span-1">
                    <label class="block text-gray-700 font-semibold mb-2">คำนำหน้า</label>
                    <select id="prefix" name="prefix" class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                        <option value="" disabled selected>เลือก</option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                </div>
                <div class="md:col-span-3">
                    <label class="block text-gray-700 font-semibold mb-2">ชื่อ - นามสกุล</label>
                    <input type="text" id="fullname" name="fullname" placeholder="เช่น สมชาย ใจดี" class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">ตำแหน่งที่ต้องการสมัคร</label>
                    <input type="text" id="position" name="position" placeholder="เช่น Graphic Designer" class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">วัน/เดือน/ปี เกิด</label>
                    <input type="date" id="dob" name="dob" class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-gray-500" required>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">ระดับการศึกษาสูงสุด</label>
                <select id="education" name="education" class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                    <option value="" disabled selected>กรุณาเลือกวุฒิการศึกษา</option>
                    <option value="มัธยมศึกษา">มัธยมศึกษาตอนปลาย / ปวช.</option>
                    <option value="อนุปริญญา">อนุปริญญา / ปวส.</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                </select>
            </div>

            <hr class="border-gray-200">

            <div>
                <label class="block text-gray-700 font-semibold mb-2">ความสามารถพิเศษ / ทักษะ</label>
                <textarea id="skills" name="skills" rows="4" placeholder="โปรดระบุทักษะของคุณ เช่น Photoshop, Excel, ภาษาอังกฤษ..." class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">ประสบการณ์การทำงาน</label>
                <textarea id="experience" name="experience" rows="4" placeholder="ระบุประวัติการทำงานที่ผ่านมา (ถ้ามี)" class="form-input w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"></textarea>
            </div>

            <div class="pt-4">
                <button type="submit" name="Submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-lg shadow-lg transform transition hover:-translate-y-1 hover:shadow-xl duration-300">
                    ส่งใบสมัคร
                </button>
            </div>

        </form>
    </div>

    <script>
        // โค้ด JavaScript ถูกลบออกเพื่อให้ฟอร์มส่งข้อมูลไปยัง PHP
    </script>
<?php
if (isset($_POST['Submit'])){
	$prefix = $_POST['prefix'];
    $fullname = $_POST['fullname'];
    $position = $_POST['position'];
    $dob = $_POST['dob'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
	$experience = $_POST['experience'];

	include_once("connectdb_app.php");
	
	$sql = "INSERT INTO application (a_id, a_title, a_name, a_position, a_birth, a_edu, a_skills, a_exp) VALUES (null, '{$prefix}', '$fullname', '{$position}', '{$dob}', '{$education}', '{$skills}', '$experience');";
	mysqli_query($conn, $sql) or die ("insert ไม่ได้");
	
	echo "<script>";
	echo "alert('เพิ่มสำเร็จ')";
	echo "</scipt>";
}
?>

</body>
</html>