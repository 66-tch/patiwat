<?php
    session_start();
    include_once("check_login.php");
    include_once("connectdb.php"); // ดึงไฟล์เชื่อมต่อฐานข้อมูลมาเพื่อเตรียมดึงข้อมูลสินค้า
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - ปฏิวัติ มาตวัน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f0f4f8; }
        .sidebar { min-height: 100vh; background-color: #263238; color: white; }
        .sidebar a { color: #b0bec5; text-decoration: none; transition: 0.3s; }
        .sidebar a:hover, .sidebar a.active { color: white; background-color: #37474f; }
        .nav-link { padding: 15px 20px; }
        .main-content { padding: 20px; }
        .card { border: none; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .table thead { background-color: #e1f5fe; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow">
            <div class="position-sticky pt-4">
                <div class="text-center mb-4">
                    <i class="bi bi-box-seam fs-1"></i>
                    <h6 class="mt-2 text-white">Inventory System</h6>
                </div>
                <hr class="mx-3 text-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าแอดมิน</a></li>
                    <li class="nav-item"><a class="nav-link active" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a></li>
                    <li class="nav-item"><a class="nav-link" href="customer.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                    <li class="mt-5"><a class="nav-link text-warning" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-dark">จัดการรายการสินค้า</h1>
                <button type="button" class="btn btn-success shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                </button>
            </div>

            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>รูปภาพ</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคา</th>
                                <th>คงเหลือ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td><img src="https://via.placeholder.com/50" class="rounded" alt="สินค้า"></td>
                                <td>ตัวอย่างสินค้า 1</td>
                                <td>590 บาท</td>
                                <td>25</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-outline-danger btn-sm" onclick="return confirm('ลบรายการนี้?')"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
                
                <nav class="mt-3">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">ก่อนหน้า</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
                    </ul>
                </nav>
            </div>
            
            <footer class="text-center mt-5 text-muted small">
                ยินดีต้อนรับคุณ: <?php echo $_SESSION['aname'];?> | จัดทำโดย ปฏิวัติ มาตวัน
            </footer>
        </main>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>