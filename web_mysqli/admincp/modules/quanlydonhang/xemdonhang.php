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
<p class="tieude1">Xem đơn hàng</p>
<?php
$sql_lietke_dh = "SELECT * FROM chitietdonhang,sanpham,donhang where chitietdonhang.madonhang=donhang.madonhang and chitietdonhang.Id_sanpham=sanpham.Id_sanpham and chitietdonhang.madonhang='$_GET[code]' 
ORDER BY chitietdonhang.Id_chitietdonhang DESC ";
$query_lietke_dh =  mysqli_query($mysqli, $sql_lietke_dh);
?>
<table style="width: 100%; border-collapse: collapse;" border="1" class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm </th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $i = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
        $thanhtien = $row['giasp'] * $row['soluongmua'];
        $tongtien += $thanhtien;
        $dhst = $row['tinhtrangdh'];
        $md = $row['madonhang'];
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['madonhang'] ?></td>
            <td><?php echo $row['tensanpham'] ?></td>
            <td><?php echo $row['soluongmua'] ?></td>
            <td><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></td>
            <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="6">
            <p style="font-weight: bold;font-size: 15pt;color:red;float:right; margin-right: 3px;">Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
            <?php if ($dhst == 1) {
                echo '<a class="xemdh1" href="modules/quanlydonhang/xuly.php?code=' . $md . '">Tiếp nhận đơn</a>';
                // echo 'Đơn hàng mới';
            } else {
                echo '';
            } ?>
        </td>
    </tr>

</table>