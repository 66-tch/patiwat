<?php
    session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ : ปฏิวัติ มาตวัน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* โทนสีเย็นแบบไล่เฉด (Cool Tone Gradient) */
            background: linear-gradient(135deg, #e0f2f1 0%, #e1f5fe 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Sarabun', sans-serif;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            background-color: rgba(255, 255, 255, 0.9);
        }
        .btn-primary {
            background-color: #4db6ac; /* สี Teal เย็นๆ */
            border: none;
        }
        .btn-primary:hover {
            background-color: #00897b;
        }
        .form-control:focus {
            border-color: #4db6ac;
            box-shadow: 0 0 0 0.25 darkcyan;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            
            <div class="card login-card p-4">
                <div class="card-body text-center">
                    <h3 class="card-title mb-4 text-secondary">เข้าสู่ระบบหลังบ้าน</h3>
                    <p class="text-muted small">ยินดีต้อนรับ: ปฏิวัติ มาตวัน(มายมิ้น)</p>
                    
                    <form method="post" action="">
                        <div class="form-floating mb-3 text-start">
                            <input type="text" name="auser" class="form-control" id="floatingInput" placeholder="Username" autofocus required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4 text-start">
                            <input type="password" name="apwd" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg shadow-sm">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <p class="text-center mt-4 text-secondary small">© 2024 Patiwat Matawan - MyMint</p>
        </div>
    </div>
</div>

<?php
if(isset($_POST["Submit"])){
    include_once("connectdb.php");
    
    $user = $_POST['auser'];
    $pwd = $_POST['apwd'];

    $stmt = mysqli_prepare($conn, "SELECT * FROM admin WHERE a_username = ?");
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $rs = mysqli_stmt_get_result($stmt);
    
    if($data = mysqli_fetch_array($rs)){
        if (password_verify($pwd, $data['a_password'])) {
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            echo "<script>
                    window.location='index2.php';
                  </script>";
        } else {
            echo "<script>
                    alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
                    window.history.back();
                  </script>";
        }
    } else {
        echo "<script>
                alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
                window.history.back();
              </script>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>