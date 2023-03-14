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

    .xemdh {
        text-decoration: none;

    }

    .xemdh:hover {
        color: #ee850c;
        text-decoration: none;

    }
</style>
<div>
    <p class="tieude1">Liệt kê đơn hàng</p>
</div>
<?php
$sql_lietke_dh = "SELECT * FROM donhang,khachhang where donhang.Id_khachhang=khachhang.Id_khachhang  ORDER BY donhang.date_donhang DESC ";
$query_lietke_dh =  mysqli_query($mysqli, $sql_lietke_dh);
?>

<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ </th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Ngày đặt</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['madonhang'] ?></td>
            <td><?php echo $row['tenkhachhang'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td>
                <?php if ($row['tinhtrangdh'] == 1) {
                    // echo '<a class="xemdh" href="modules/quanlydonhang/xuly.php?code=' . $row['madonhang'] . '">Đơn hàng mới</a>';
                    echo 'Đơn hàng mới';
                } else {
                    echo 'Đã xem';
                } ?>
            </td>
            <td><?php echo $row['date_donhang'] ?></td>
            <td>
                <a class="xemdh" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['madonhang'] ?>"><i class="fa fa-eye" style="color: blue;" aria-hidden="true"></i>Xem đơn hàng</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>