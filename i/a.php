<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปฏิวัติ มาตวัน (มายมิ้น)</title>
</head>

<body>
    <h1>งาน i</h1>
    <h1>ปฏิวัติ มาตวัน (มายมิ้น)</h1>
<table border="1">
    <tr>
        <th>รหัสภาค</th>
        <th>ชื่อภาค</th>
    </tr>

<?php
    include_once("connectdb.php");
    $sql = "SELECT * FROM `regions` ORDER BY `regions`.`r_id` ASC";
    $rs = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_array($rs)){
?>
    <tr>
        <th><?php echo $data['r_id'];?></th>
        <th><?php echo $data['r_name'];?></th>
    </tr>
<?php } ?>
</table>
</body>
</html>