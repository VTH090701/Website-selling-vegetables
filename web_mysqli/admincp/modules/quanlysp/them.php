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
<div>
    <p class="tieude1">Thêm sản phẩm</p>
</div>
<table width="50%" style="border-collapse:collapse ;">
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td class="tieude2"> Tên sản phẩm:</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td class="tieude2">Mã sản phẩm:</td>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <td class="tieude2">Giá sản phẩm:</td>
            <td><input type="text" name="giasp"></td>
        </tr>

        <tr>
            <td class="tieude2">Hình ảnh:</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td class="tieude2">Tóm tắt:</td>
            <td><textarea name="tomtat" rows="15" cols="40"></textarea></td>
        </tr>
        <tr>
            <td class="tieude2">Nội dung:</td>
            <td><textarea name="noidung" rows="15" cols="40"></textarea></td>
        </tr>
        <tr>
            <td class="tieude2">Danh mục sản phẩm:</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY Id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <option value="<?php echo $row_danhmuc['Id_danhmuc'] ?> "><?php echo $row_danhmuc['tendanhmuc'] ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input class="nutclick mt-2" style="margin-left: 120px;"  type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>