<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปยอดขาย - ปฏิวัติ มาตวัน (มายมิ้น)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body {
            background-image: url('img/bg.jpg'); 
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            padding: 30px 0;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .chart-container {
            position: relative;
            height: 300px; /* กำหนดความสูงกราฟ */
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="glass-card text-center">
            <h2 class="fw-bold">รายงานสรุปยอดขายตามประเทศ</h2>
            <p class="text-muted">ปฏิวัติ มาตวัน (มายมิ้น)</p>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="glass-card">
                    <h5 class="mb-3 text-center">ยอดขายรวม (Bar Chart)</h5>
                    <div class="chart-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="glass-card">
                    <h5 class="mb-3 text-center">สัดส่วนยอดขาย (Pie Chart)</h5>
                    <div class="chart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="glass-card">
            <table id="summaryTable" class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ประเทศ</th>
                        <th class="text-end">ยอดขายรวม (บาท)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("connectdb.php");
                        $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC";
                        $rs = mysqli_query($conn, $sql);
                        
                        // เตรียมข้อมูลสำหรับ Chart
                        $countries = [];
                        $totals = [];
                        $index = 1;

                        while ($data = mysqli_fetch_array($rs)){
                            $countries[] = $data['p_country'];
                            $totals[] = $data['total'];
                    ?>
                    <tr>
                        <td><?php echo $index++; ?></td>
                        <td><strong><?php echo $data['p_country'];?></strong></td>
                        <td class="text-end text-primary"><?php echo number_format($data['total'], 0);?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        // ข้อมูลจาก PHP ส่งมายัง JavaScript
        const labels = <?php echo json_encode($countries); ?>;
        const dataValues = <?php echo json_encode($totals); ?>;


        // 1. วาด Bar Chart
        const ctxBar = document.getElementById('barChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'ยอดขายสะสม',
                    data: dataValues,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } }
            }
        });

        // 2. วาด Pie Chart
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: dataValues,
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#8BC34A'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // เปิดใช้งาน DataTables
        $(document).ready(function() {
            $('#summaryTable').DataTable({
                "language": { "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json" },
                "paging": false,
                "searching": false
            });
        });
    </script>
</body>
</html>