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
    table{
        margin: auto;
    }
   .tieude2{
        font-size: 15pt;
        font-weight: bold;
       
   }
   .nutclick{
    background-color:#192b02 ;
    color: white;
    border-radius:5px;
    padding: 4px;
   }


</style>
<?php
$sql_sua_sp = "SELECT * FROM sanpham WHERE Id_sanpham = '$_GET[idsanpham]' LIMIT 1 ";
$query_sua_sp =  mysqli_query($mysqli, $sql_sua_sp);
?>
<p class="tieude1">Sửa sản phẩm</p>
<table width="50%" style="border-collapse:collapse ;">
    <?php
    while ($row = mysqli_fetch_array($query_sua_sp)) {
    ?>
        <form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['Id_sanpham'] ?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td class="tieude2">Tên sản phẩm:</td>
                <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
            </tr>
            <tr>
                <td class="tieude2">Mã sản phẩm:</td>
                <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
            </tr>
            <tr>
                <td class="tieude2">Giá sản phẩm:</td>
                <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
            </tr>

            <tr>
                <td class="tieude2">Hình ảnh:</td>
                <td><input type="file" name="hinhanh">
                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" style="width: 150px;">
                </td>
            </tr>
            <tr>
                <td class="tieude2">Tóm tắt:</td>
                <td><textarea name="tomtat" rows="15" cols="40"> <?php echo $row['tomtat'] ?> </textarea></td>
            </tr>
            <tr>
                <td class="tieude2">Nội dung:</td>
                <td><textarea name="noidung" rows="15" cols="40"> <?php echo $row['noidung'] ?> </textarea></td>
            </tr>
            <tr>
                <td class="tieude2">Danh mục sản phẩm:</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY Id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['Id_danhmuc'] == $row['Id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['Id_danhmuc'] ?>"> <?php echo $row_danhmuc['tendanhmuc'] ?> </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['Id_danhmuc'] ?> "><?php echo $row_danhmuc['tendanhmuc'] ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>

            <tr>
                <td colspan="2"><input class="nutclick mt-2" style="margin-left: 120px;" type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>