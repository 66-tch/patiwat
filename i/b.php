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
        <th>รหัสจังหวัด</th>
        <th>ชื่อจังหวัด</th>
        <th>รูปภาพ</th>
        <th>รหัสภาค</th>
    </tr>

<?php
    include_once("connectdb.php");
    $sql = "SELECT * FROM `provinces` AS `p`
    INNER JOIN `regions` AS r
    ON p.r_is = r.r_id
    ORDER BY `provinces`.`p_id` ASC";
    $rs = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_array($rs)){
?>
    <tr>
        <td><?php echo $data['p_id'];?></td>
        <td><?php echo $data['p_name'];?></td>
        <td><?php echo $data['p_ext'];?></td>
        <td><?php echo $data['r_id'];?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>