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
    <title>จัดการลูกค้า - ปฏิวัติ มาตวัน</title>
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
        .avatar-circle {
            width: 40px;
            height: 40px;
            background-color: #e1f5fe;
            color: #0288d1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow">
            <div class="position-sticky pt-4">
                <div class="text-center mb-4">
                    <i class="bi bi-people-fill fs-1 text-warning"></i>
                    <h6 class="mt-2 text-white">Customer CRM</h6>
                </div>
                <hr class="mx-3 text-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าแอดมิน</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a></li>
                    <li class="nav-item"><a class="nav-link active" href="customer.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a></li>
                    <li class="mt-5"><a class="nav-link text-warning" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-dark">ฐานข้อมูลลูกค้า</h1>
                <div class="btn-group">
                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> Export</button>
                    <button class="btn btn-primary btn-sm ms-2"><i class="bi bi-person-plus"></i> เพิ่มลูกค้าใหม่</button>
                </div>
            </div>

            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>ลูกค้า</th>
                                <th>อีเมล / เบอร์โทรศัพท์</th>
                                <th>ที่อยู่</th>
                                <th>วันที่ลงทะเบียน</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-circle me-3">S</div>
                                        <div>
                                            <div class="fw-bold">คุณสมชาย ใจดี</div>
                                            <small class="text-muted">ID: CUST-001</small>
                                        </div>
                                    </div>
                                </td>
                                <td>somchai@email.com<br><small>081-234-5678</small></td>
                                <td class="text-truncate" style="max-width: 200px;">123 ม.5 ต.ในเมือง อ.เมือง จ.ขอนแก่น</td>
                                <td>20/01/2026</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border"><i class="bi bi-pencil-square text-primary"></i></button>
                                    <button class="btn btn-sm btn-light border" onclick="return confirm('ลบข้อมูลลูกค้ารายนี้?')"><i class="bi bi-trash text-danger"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-circle me-3" style="background-color: #fce4ec; color: #d81b60;">W</div>
                                        <div>
                                            <div class="fw-bold">คุณวิภาดา สายสวย</div>
                                            <small class="text-muted">ID: CUST-002</small>
                                        </div>
                                    </div>
                                </td>
                                <td>wipada@email.com<br><small>089-999-8888</small></td>
                                <td class="text-truncate" style="max-width: 200px;">456 แขวงพญาไท เขตราชเทวี กรุงเทพฯ</td>
                                <td>22/01/2026</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border"><i class="bi bi-pencil-square text-primary"></i></button>
                                    <button class="btn btn-sm btn-light border"><i class="bi bi-trash text-danger"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="text-center mt-5 text-muted small">
                Dashboard ของคุณ: <?php echo $_SESSION['aname'];?> | พัฒนาโดย ปฏิวัติ มาตวัน
            </footer>
        </main>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>