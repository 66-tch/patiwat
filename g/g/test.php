<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body {
            /* ใส่รูปพื้นหลัง */
            background-image: url('img/bg.jpg'); 
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            font-family: 'Sarabun', sans-serif;
            padding: 40px 0;
        }

        /* ตกแต่ง Card ให้เป็นแบบกระจกโปร่งแสง (Glassmorphism) */
        .glass-card {
            background: rgba(255, 255, 255, 0.85); /* สีขาวโปร่งแสง */
            backdrop-filter: blur(10px); /* เอฟเฟกต์เบลอพื้นหลัง */
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            padding: 30px;
            margin-bottom: 50px;
        }

        .table {
            --bs-table-bg: transparent; /* ให้ตารางโปร่งแสงตาม Card */
        }

        .product-img {
            object-fit: cover;
            border-radius: 50%; /* ทำรูปสินค้าเป็นวงกลมให้ดูซอฟต์ลง */
            border: 2px solid #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="glass-card">
            <h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>
            
            <div class="table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr class="table-light">
                            <th>Order ID</th>
                            <th>สินค้า</th>
                            <th>ประเภท</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                            <th class="text-center">รูป</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once("connectdb.php");
                            $sql = "SELECT * FROM `popsupermarket`";
                            $rs = mysqli_query($conn, $sql);
                            $total = 0;
                            while ($data = mysqli_fetch_array($rs)){
                                $total += $data['p_amount'];
                        ?>
                        <tr>
                            <td><?php echo $data['p_order_id'];?></td>
                            <td class="fw-bold"><?php echo $data['p_product_name'];?></td>
                            <td><span class="badge rounded-pill bg-success bg-opacity-75"><?php echo $data['p_category'];?></span></td>
                            <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                            <td><?php echo $data['p_country'];?></td>
                            <td class="text-end fw-bold text-dark"><?php echo number_format($data['p_amount'], 0);?></td>
                            <td class="text-center">
                                <img src="img/<?php echo $data['p_product_name'];?>.jpg" 
                                     width="45" height="45" class="product-img"
                                     onerror="this.src='https://via.placeholder.com/45?text=Fruit'">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <th colspan="5" class="text-end">ยอดรวมทั้งสิ้น:</th>
                            <th class="text-end text-danger fs-5"><?php echo number_format($total, 0);?></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json"
                },
                "pageLength": 10
            });
        });
    </script>
</body>
</html>