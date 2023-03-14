<div id="section-index">
      <i></i>
      <span id="section-title-main">Chi tiết sản phẩm</span>
      <i></i>
</div>
<?php
$sql_chitiet = "SELECT * FROM danhmuc,sanpham,kho where sanpham.Id_danhmuc=danhmuc.Id_danhmuc AND kho.Id_sanpham=sanpham.Id_sanpham AND
        sanpham.Id_sanpham = '$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
      $iddm = $row_chitiet['Id_danhmuc']
?>
      <div class="row">
            <div class="col-md-5">
                  <img class="border border-success img_ctsp" style="width: 400px;" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                  <p class="mt-2">
                        <img style="width: 130px;" class="border border-success img_ctsp" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                  </p>
            </div>
            <div class="col-md-7">
                  <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['Id_sanpham'] ?>">
                        <div class="chitiet_sanpham ">
                              <p style="font-size: 35pt;font-weight: bold;"><?php echo $row_chitiet['tensanpham'] ?></p>
                              <hr>
                              <p style="font-size: 20pt;font-weight: 500;">Giá sản phẩm : <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . 'vnđ/kg' ?></p>
                              <hr>
                              <p style="font-size: 22pt;font-weight: 500;">Thông tin sản phẩm: </p>
                              <p>Nơi sản xuất : <?php echo $row_chitiet['nhacungcap'] ?></p>
                              <p>Hạn sử dụng : 5 - 10 ngày</p>
                              <p>Ngày nhập vào kho : <?php echo $row_chitiet['ngaynhap'] ?> </p>
                              <hr>
                              <p style="font-size: 20pt;font-weight: 500;">Mô tả: </p>
                              <p>Giao hàng tận nhà nội thành Cần Thơ với đơn hàng tối thiểu 200.000đ.</p>
                              <p>
                                    <input name="soluong" type="number" max="100" min="0" value="0" size="3" style="margin-left: 20px;">
                                    <input type="submit" name="themgiohang" class="btn-cart" value="Thêm sản phẩm" style="margin-left: 12px;">
                              </p>
                        </div>
                  </form>
            </div>
      </div>


      <hr>

      <div class="tabs">
            <ul id="tabs-nav">
                  <li><a href="#tab1">Nội dung chi tiết</a></li>
                  <li><a href="#tab2">Chức năng</a></li>

            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                  <div id="tab1" class="tab-content">
                        <?php echo $row_chitiet['noidung'] ?>
                  </div>
                  <div id="tab2" class="tab-content">
                        <?php echo $row_chitiet['tomtat'] ?>
                  </div>

            </div> <!-- END tabs-content -->
      </div> <!-- END tabs -->
      <hr>

      <?php
      $sql1 = "SELECT * FROM sanpham WHERE Id_danhmuc= '$iddm' AND Id_sanpham <> '$_GET[id]' LIMIT 4";
      $query_sql1 = mysqli_query($mysqli, $sql1);
      ?>
      <div id="mainContent" style="margin-left: 50px;">
            <h1 style="margin-left: 27px;">Sản phẩm tương tự:</h1>
            <div class="products">
      <div class="container-fluid">
        <ul class="products_listctsp">
          <?php
          while ($row1 = mysqli_fetch_array($query_sql1)) {
          ?>
            <li>
              <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row1['Id_sanpham'] ?>">
                <a href="index.php?quanly=chitietsanpham&id=<?php echo $row1['Id_sanpham'] ?>">
                  <img src="admincp/modules/quanlysp/uploads/<?php echo $row1['hinhanh'] ?>">
                  <p class="title_product"><?php echo $row1['tensanpham'] ?></p>
                  <p class="price_product"><?php echo number_format($row1['giasp'], 0, ',', '.') . 'vnđ/kg' ?></p>
                </a>
                  <input name="soluong" type="number" max="100" min="0" value="0" size="3" style="margin-left: 30px;">
                  <input  type="submit" name="themgiohang" class="btn-cart" value="Thêm sản phẩm" style="margin-left: 12px;">
              </form>
            </li>
          <?php
          }
          ?>
        </ul>


      </div>
    </div>
      </div>
<?php
}
?>