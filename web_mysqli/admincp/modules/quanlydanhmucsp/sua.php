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
    $sql_sua_danhmucsp = "SELECT * FROM danhmuc WHERE Id_danhmuc='$_GET[iddanhmuc]' LIMIT 1 "; 
    $query_sua_danhmucsp =  mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p class="tieude1">Sửa danh mục sản phẩm</p>
<table  width="50%" style="border-collapse:collapse ;">
<form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST" >
    <?php
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
    <tr>
        <td class="tieude2">Tên danh mục:</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
    </tr>

    <tr>
       <td colspan="2"><input class="nutclick mt-2" style="margin-left: 120px;" type="submit" name="suadanhmuc" value="Sửa danh mục"></td>
    </tr>
    <?php
    };
    ?>
</form>
</table>