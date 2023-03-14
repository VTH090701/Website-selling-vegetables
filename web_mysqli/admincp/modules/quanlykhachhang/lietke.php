<style>
    table tr th {
        background-color: silver;
    }

    .tieude1 {
        font-size: 20pt;
        background-color: #192b02;
        color: white;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
    }
</style>
<div>
    <p class="tieude1">Liệt kê khách hàng</p>
</div>
<?php
$sql_lietke = "SELECT tenkhachhang,email,dienthoai,diachi,COUNT(tenkhachhang) FROM donhang,khachhang where donhang.Id_khachhang=khachhang.Id_khachhang GROUP BY tenkhachhang";
$query_lietke =  mysqli_query($mysqli, $sql_lietke);
?>

<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Số đơn hàng đã mua</th>
        <th>Phân hạng khách hàng</th>
        <!-- <th>Quản lý </th> -->
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenkhachhang'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['COUNT(tenkhachhang)'] ?></td>
            <td>
               <?php
                if($row['COUNT(tenkhachhang)']>10)
                {
                    echo'Bạc kim';
                }else if($row['COUNT(tenkhachhang)']>7) {
                    echo'Vàng';
                }else if($row['COUNT(tenkhachhang)']>5){
                    echo'Bạc';
                }else{
                    echo'Đồng';
                }
               ?>
            </td>
            <!-- <td>
                <a href="?action=quanlykhachhang&query=sua"><i class="fa fa-pencil" style="color: blue; font-size: large;" aria-hidden="true"></i></a>
            </td> -->
        </tr>
    <?php
    }
    ?>
</table>