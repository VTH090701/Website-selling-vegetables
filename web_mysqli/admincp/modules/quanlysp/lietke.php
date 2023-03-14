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
<?php
$sql_lietke_sp = "SELECT * FROM sanpham,danhmuc WHERE sanpham.Id_danhmuc = danhmuc.Id_danhmuc ORDER BY Id_sanpham ASC ";
$query_lietke_sp =  mysqli_query($mysqli, $sql_lietke_sp);
?>
<div>
    <p class="tieude1">Liệt kê sản phẩm</p>
</div>
<a class="themdm" href="?action=quanlysp&query=them">Thêm sản phẩm</a>
<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sản phẩm</th>
        <th>Danh mục</th>
        <th>Mã sản phẩm</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sp)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensanpham'] ?></td>
            <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" style="width: 150px;"></td>
            <td><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ/kg'?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td><?php echo $row['masp'] ?></td>

            <td>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này');" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['Id_sanpham']  ?>"><i class="fa fa-trash" style="color: red; font-size: large;" aria-hidden="true"></i></a> |
                <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['Id_sanpham']  ?>"><i class="fa fa-pencil" style="color: blue; font-size: large;" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>