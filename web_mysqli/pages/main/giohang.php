<style>
   .dkdh{
      border:1px solid #000;
      background-color: rebeccapurple;
      color: white;
      border-radius:5px;
      padding: 7px;
   }
   table tr th{
      background-color: silver;
   }
   table{
     border-radius:5px;
   }
</style>
<div id="section-index" class="mt-4">
   <i></i>
   <span id="section-title-main">Giỏ hàng</span>
   <i></i>
</div>
<p style="font-size: 15pt;font-weight: bold;">Giỏ hàng
   <?php
      if(isset($_SESSION['dangky'])){
         echo 'xin chào: '.'<span style ="color:red; ">'.$_SESSION['dangky'].'</span>';
         // echo $_SESSION['Id_khachhang'];
      }
   ?>
</p>
<table style="width: 100%;text-align: center;" border="1" class="mt-4">
   <tr>
      <th>Id</th>
      <!-- <th>Mã sản phẩm</th> -->
      <th>Tên sản phẩm</th>
      <th>Hình ảnh</th>
      <th>Số lượng</th>
      <th>Giá sản phẩm</th>
      <th>Thành tiền</th>
      <th>Quản lý</th>
   </tr>
   <?php
   if (isset($_SESSION['cart'])) {
      $i = 0;
      $tongtien = 0;
      foreach ($_SESSION['cart'] as $cart_item) {
         $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
         $tongtien += $thanhtien;
         $i++;
   ?>
         <tr>
            <td><?php echo $i; ?></td>
            <!-- <td><?php echo $cart_item['masp']; ?></td> -->
            <td><?php echo $cart_item['tensanpham']; ?></td>
            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
            <td>
               <?php echo $cart_item['soluong']; ?>
            </td>
            <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'vnđ'; ?></td>
            <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ'; ?></td>
            <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa fa-trash" style="color: green; font-size: x-large;" aria-hidden="true"></i></a></td>
         </tr>
      <?php
      }
      ?>
      <tr>
         <td colspan="8">
            <p style="text-align: left; font-weight:bold ;">Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ'; ?></p>
            <p style="text-align: right;"><a onclick="return confirm('Bạn chắc chắn muốn xóa tất cả sản phẩm');" 
            class="dkdh" style="text-decoration: none;" href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
            
            <div style="clear: both;"></div>
            <?php
               if(isset($_SESSION['dangky'])){
                  ?>
                  <p><a class="dkdh" style="text-decoration: none;" href="pages/main/thanhtoan.php">Đặt hàng</a></p>
               <?php
               }else{
               ?>
               <p><a class="dkdh" style="text-decoration: none;" href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
               <?php
               }
            ?>
         </td>
      </tr>
   <?php


   } else {
   ?>
      <tr>
         <td colspan="8">
            <p>Hiện tại giỏ hàng trống</p>
         </td>
      </tr>
   <?php
   }
   ?>
</table>