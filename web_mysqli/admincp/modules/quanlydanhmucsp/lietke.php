<style>
    table tr th{
        background-color: silver;
    }
    .tieude1{
        font-size: 20pt;
        background-color:#192b02 ;
        color:white ;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
    }
    .themdm{
        float: right;
        border: 1px solid #000;
        padding: 5px;
        border-radius: 5px;
        margin-bottom: 3px;
        background-color: green;
        color: white;
        font-weight: 500;

    }
    .themdm:hover{
        background-color: #192b02;
        text-decoration: none;
        color: white;
    }
</style>
<?php
$sql_lietke_danhmucsp = "SELECT * FROM danhmuc ORDER BY Id_danhmuc ASC ";
$query_lietke_danhmucsp =  mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<div >
    <p class="tieude1">Liệt kê danh mục sản phẩm</p>
</div>
<a class="themdm" href="?action=quanlydanhmucsanpham&query=them">Thêm danh mục mới</a>
<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa danh mục sản phẩm này');" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['Id_danhmuc']  ?>"><i class="fa fa-trash" style="color: red; font-size: large;" aria-hidden="true"></i></a> |
                <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['Id_danhmuc']  ?>"><i class="fa fa-pencil" style="color: blue; font-size: large;" aria-hidden="true"></i></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>