<?php
    session_start();
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - ปฏิวัติ มาตวัน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #263238; /* สีเทาเข้มโทนเย็น */
            color: white;
        }
        .sidebar a {
            color: #b0bec5;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover, .sidebar a.active {
            color: white;
            background-color: #37474f;
        }
        .nav-link {
            padding: 15px 20px;
            border-radius: 0;
        }
        .main-content {
            background-color: #f0f4f8; /* พื้นหลังสีฟ้าอ่อนมากๆ */
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .welcome-text {
            color: #455a64;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow">
            <div class="position-sticky pt-4">
                <div class="text-center mb-4">
                    <i class="bi bi-person-circle fs-1"></i>
                    <h6 class="mt-2 text-white">Admin Panel</h6>
                </div>
                <hr class="mx-3 text-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index2.php">
                            <i class="bi bi-speedometer2 me-2"></i> หน้าแอดมิน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="bi bi-cart3 me-2"></i> จัดการออเดอร์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer.php">
                            <i class="bi bi-people me-2"></i> จัดการลูกค้า
                        </a>
                    </li>
                    <li class="mt-5">
                        <a class="nav-link text-warning" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')">
                            <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 welcome-text">Dashboard Admin</h1>
                <div class="btn-toolbar mb-2 mb-md-0 text-secondary">
                    <i class="bi bi-calendar3 me-2"></i> วันที่: <?php echo date("d/m/Y"); ?>
                </div>
            </div>

            <div class="alert alert-white bg-white shadow-sm border-0 mb-4">
                <h4 class="mb-0 text-primary">ยินดีต้อนรับคุณ: <strong><?php echo $_SESSION['aname'];?></strong></h4>
                <p class="text-muted mb-0 small">จัดการระบบหลังบ้านได้จากเมนูทางซ้ายมือ</p>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card bg-info text-white p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>สินค้าทั้งหมด</h6>
                                <h2 class="mb-0">24 รายการ</h2>
                            </div>
                            <i class="bi bi-box fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-success text-white p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>ออเดอร์ใหม่</h6>
                                <h2 class="mb-0">12 รายการ</h2>
                            </div>
                            <i class="bi bi-cart-check fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-primary text-white p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>จำนวนลูกค้า</h6>
                                <h2 class="mb-0">150 ราย</h2>
                            </div>
                            <i class="bi bi-person-heart fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 p-5 bg-white rounded shadow-sm text-center">
                <h2 class="text-muted">เลือกเมนูที่ต้องการเพื่อเริ่มจัดการระบบ</h2>
                <p>ระบบหลังบ้าน พัฒนาโดย ปฏิวัติ มาตวัน</p>
            </div>
            
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>