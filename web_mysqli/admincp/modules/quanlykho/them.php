<style>
    .tieude1 {
        font-size: 20pt;
        background-color: #192b02;
        color: white;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
    }

    table {
        margin: auto;
    }

    .tieude2 {
        font-size: 15pt;
        font-weight: bold;

    }

    .nutclick {
        background-color: #192b02;
        color: white;
        border-radius: 5px;
        padding: 4px;
    }
</style>
<p class="tieude1">Thêm danh sản phẩm vào kho</p>
<table width="50%" style="border-collapse:collapse ;">
    <form action="modules/quanlykho/xuly.php" method="POST">
        <tr>
            <td class="tieude2">Id sản phẩm: </td>
            <td><input type="text" name="idspham"></td>
        </tr>
        <tr>
            <td class="tieude2">Tên sản phẩm: </td>
            <td><input type="text" name="tenspnhap"></td>
        </tr>
        <tr>
            <td class="tieude2">Nhà cung cấp: </td>
            <td><input type="text" name="nhacungcap"></td>
        </tr>
        <tr>
            <td class="tieude2">Số lượng nhập: </td>
            <td><input type="text" name="soluongnhap"></td>
        </tr>
        <tr>
            <td class="tieude2">Giá nhập: </td>
            <td><input type="text" name="gianhap"></td>
        </tr>
        <tr>
            <td class="tieude2">Đơn vị tính: </td>
            <td><input type="text" name="donvitinh"></td>
        </tr>

        <!-- <tr>
        <td>Thứ tự</td>
        <td><input type="text" name="thutu"></td>
        </tr> -->
        <tr>
            <td colspan="2"><input class="nutclick mt-2" style="margin-left: 120px;" type="submit" name="themvaokho" value="Thêm vào kho"></td>
        </tr>
    </form>
</table>