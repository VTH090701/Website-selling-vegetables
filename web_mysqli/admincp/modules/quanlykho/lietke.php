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

    .themdm {
        float: right;
        border: 1px solid #000;
        padding: 5px;
        border-radius: 5px;
        margin-bottom: 3px;
        background-color: green;
        color: white;
        font-weight: 500;

    }

    .themdm:hover {
        background-color: #192b02;
        text-decoration: none;
        color: white;
    }
</style>
<div>
    <p class="tieude1">Liệt kê kho</p>
</div>
<a class="themdm" href="?action=quanlykho&query=them">Thêm sản phẩm vào kho</a>
<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Nhà cung cấp</th>
        <th>Số lượng nhập</th>
        <th>Giá nhập</th>
        <th>Đơn vị tính</th>
        <th>Ngày nhập</th>
        <th>Số lương còn lại</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $slcl = 0;
    $sql1 = "SELECT s.Id_sanpham idsp,s.tensanpham tensp,k.soluongnhap sln ,sum(soluongmua) slm FROM sanpham s,chitietdonhang c,kho k WHERE s.Id_sanpham=c.Id_sanpham AND k.Id_sanpham=s.Id_sanpham GROUP BY s.tensanpham ORDER BY s.Id_sanpham ASC";
    $sql1_query = mysqli_query($mysqli, $sql1);

    while ($row1 = mysqli_fetch_array($sql1_query)) {
        $idsp = $row1['idsp'];
        $slcl = $row1['sln'] - $row1['slm'];
        $sql2 = "SELECT * FROM kho where Id_sanpham= '$idsp'";
        $sql2_query = mysqli_query($mysqli, $sql2);
        while ($row2 = mysqli_fetch_array($sql2_query)) {
            $sql_update1 = mysqli_query($mysqli, "UPDATE kho SET soluongconlai='$slcl' Where Id_sanpham= '$idsp' ");
        }
    }
    ?>

    <?php
    $sql3 = "SELECT * FROM kho ";
    $sql3_query = mysqli_query($mysqli, $sql3);
    $i = 1;
    while ($row3 = mysqli_fetch_array($sql3_query)) {
    ?>
        <tr>
            <td><?php echo $row3['Id_sanpham'] ?></td>
            <td><?php echo $row3['tensanphamnhap'] ?></td>
            <td><?php echo $row3['nhacungcap'] ?></td>
            <td><?php echo $row3['soluongnhap'].'kg' ?></td>
            <td><?php echo number_format($row3['gianhap'], 0, ',', '.') . 'vnđ/kg'?></td>
            <td><?php echo $row3['donvitinh'] ?></td>
            <td><?php echo $row3['ngaynhap'] ?></td>
            <td><?php echo $row3['soluongconlai'].'kg' ?></td>
            <td>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này khỏi kho hàng');" href="modules/quanlykho/xuly.php?idsanpham=<?php echo $row3['Id_sanpham']  ?>"><i class="fa fa-trash" style="color: red; font-size: large;" aria-hidden="true"></i></a> |
                <a href="?action=quanlykho&query=sua&idsanpham=<?php echo $row3['Id_sanpham']  ?>"><i class="fa fa-pencil" style="color: blue; font-size: large;" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>