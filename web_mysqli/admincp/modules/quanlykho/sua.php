<style>
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
    $sql_sua_sp = "SELECT * FROM kho WHERE Id_sanpham='$_GET[idsanpham]' LIMIT 1 "; 
    $query_sua_sp =  mysqli_query($mysqli,$sql_sua_sp);
?>
<p class="tieude1">Sửa danh mục sản phẩm</p>
<table  width="50%" style="border-collapse:collapse ;">
<form action="modules/quanlykho/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" method="POST" >
    <?php
    while($dong = mysqli_fetch_array($query_sua_sp)){
    ?>
    <tr>
        <td class="tieude2">Id sản phẩm:</td>
        <td><input type="text" value="<?php echo $dong['Id_sanpham'] ?>" name="idspham"></td>
    </tr>
    <tr>
        <td class="tieude2">Tên sản phẩm:</td>
        <td><input type="text" value="<?php echo $dong['tensanphamnhap'] ?>" name="tenspnhap"></td>
    </tr>
    <tr>
        <td class="tieude2">Nhà cung cấp:</td>
        <td><input type="text" value="<?php echo $dong['nhacungcap'] ?>" name="nhacungcap"></td>
    </tr>
    <tr>
        <td class="tieude2">Số lượng nhập:</td>
        <td><input type="text" value="<?php echo $dong['soluongnhap'] ?>" name="soluongnhap"></td>
    </tr>
    <tr>
        <td class="tieude2">Giá nhập:</td>
        <td><input type="text" value="<?php echo $dong['gianhap'] ?>" name="gianhap"></td>
    </tr>
    <tr>
        <td class="tieude2">Đơn vị tính:</td>
        <td><input type="text" value="<?php echo $dong['donvitinh'] ?>" name="donvitinh"></td>
    </tr>
    <tr>
        <td class="tieude2">Ngày nhập:</td>
        <td><input type="text" value="<?php echo $dong['ngaynhap'] ?>" name="ngaynhap"></td>
    </tr>
    <!-- <tr>
        <td>Thứ tự</td>
        <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
    </tr> -->
    <tr>
       <td colspan="2"><input class="nutclick mt-2" style="margin-left: 120px;" type="submit" name="suaspkho" value="Sửa sản phẩm"></td>
    </tr>
    <?php
    };
    ?>
</form>
</table>