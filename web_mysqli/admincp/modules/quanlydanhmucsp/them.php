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
<p class="tieude1">Thêm danh mục mới</p>
<table  width="50%" style="border-collapse:collapse ;">
    <form action="modules/quanlydanhmucsp/xuly.php" method="POST">
        <tr>
            <td class="tieude2">Tên danh mục: </td>
            <td><input type="text" name="tendanhmuc"></td>
        </tr>

        <tr>
            <td colspan="2"><input class="nutclick mt-2" style="margin-left: 120px;" type="submit" name="themdanhmuc" value="Thêm danh mục "></td>
        </tr>
    </form>
</table>