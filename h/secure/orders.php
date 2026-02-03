<?php
    session_start();
    include_once("check_login.php");
    include_once("connectdb.php"); 
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - ปฏิวัติ มาตวัน</title>
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
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .status-badge { font-weight: 400; padding: 0.5em 0.8em; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow">
            <div class="position-sticky pt-4">
                <div class="text-center mb-4">
                    <i class="bi bi-cart-check fs-1 text-info"></i>
                    <h6 class="mt-2 text-white">Order Management</h6>
                </div>
                <hr class="mx-3 text-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าแอดมิน</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link active" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a></li>
                    <li class="nav-item"><a class="nav-link" href="customer.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                    <li class="mt-5"><a class="nav-link text-warning" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-dark">รายการสั่งซื้อทั้งหมด</h1>
                <div class="text-muted">ผู้ดูแลระบบ: <?php echo $_SESSION['aname'];?></div>
            </div>

            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>เลขที่คำสั่งซื้อ</th>
                                <th>วันที่สั่งซื้อ</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ยอดรวม</th>
                                <th>สถานะ</th>
                                <th class="text-center">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-6901</td>
                                <td>01/02/2026</td>
                                <td>คุณสมชาย ใจดี</td>
                                <td><strong>1,250 ฿</strong></td>
                                <td><span class="badge bg-warning text-dark status-badge">รอชำระเงิน</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> ดูข้อมูล</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-6902</td>
                                <td>02/02/2026</td>
                                <td>คุณวิภาดา สายสวย</td>
                                <td><strong>3,400 ฿</strong></td>
                                <td><span class="badge bg-success status-badge">ชำระเงินแล้ว</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> ดูข้อมูล</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-6903</td>
                                <td>03/02/2026</td>
                                <td>คุณมานะ อดทน</td>
                                <td><strong>850 ฿</strong></td>
                                <td><span class="badge bg-info text-dark status-badge">กำลังจัดส่ง</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> ดูข้อมูล</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="text-center mt-4 text-secondary small">ระบบจัดการหลังบ้านโดย ปฏิวัติ มาตวัน</p>
        </main>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>