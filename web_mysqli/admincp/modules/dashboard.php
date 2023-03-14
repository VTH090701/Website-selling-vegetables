<style>
	.tieude1 {
		font-size: 20pt;
		background-color: #192b02;
		color: white;
		text-align: center;
		border-radius: 5px;
		font-weight: bold;
	}

	h1 {
		font-size: 17pt;
		color: blue;
		font-weight: 600;
	}

	.div1 {
		color: white;
		padding: 10px;
		width: 25%;
		background-color: #2fb033;
		margin-left: 30px;
		border-radius: 3px;
	}

	.div2 {
		color: white;
		padding: 10px;
		width: 25%;
		background-color: #428dcb;
		margin-left: 30px;
		border-radius: 3px;
	}

	.div3 {
		color: white;
		padding: 10px;
		width: 29%;
		background-color: #d73e20;
		margin-left: 30px;
		border-radius: 3px;

	}
</style>
<?php

$sql_thongke = "SELECT * FROM thongke WHERE DAY(thoigiantk) = DAY(CURDATE()) AND MONTH(thoigiantk) = MONTH(CURDATE()) AND YEAR(thoigiantk) = YEAR(CURDATE())";
$query_thongke =  mysqli_query($mysqli, $sql_thongke);
$row = mysqli_fetch_array($query_thongke)
?>
<p class="tieude1">Trang chủ</p><br>
<h1><i class="fa fa-bar-chart" style="color: blue; font-size: 17pt;margin-left: 5px;" aria-hidden="true"></i>Hoạt động hôm nay</h1>
<hr>
<div style="display: flex;">
	<div class="div1" style="display: flex;">
		<div>
			<i class="fa fa-line-chart" style="color: white;font-size: 30px;" aria-hidden="true"></i>
		</div>
		<div style="margin-left: 10px;">
			<p style="font-size: 17pt;">Tiền bán hàng</p>
			<p style="font-size: 20pt;">
				<?php
				if (isset($row['doanhthu'])) {
				?>
					<?php echo number_format($row['doanhthu'], 0, ',', '.') . 'vnđ' ?>
				<?php
				} else {
					echo '0vnđ';
				}

				?>
			</p>
		</div>
	</div>
	<div class="div2" style="display: flex;">
		<div>
			<i class="fa fa-shopping-cart" style="color: white;font-size: 30px;" aria-hidden="true"></i>
		</div>
		<div style="margin-left: 10px;">
			<p style="font-size: 17pt;">Số lượng đơn hàng</p>
			<p style="font-size: 20pt;">
				<?php
				if (isset($row['sldonhang'])) {
				?>
					<?php echo $row['sldonhang']  ?>
				<?php
				} else {
					echo '0 ';
				}

				?>
				đơn</p>
		</div>
	</div>
	<div class="div3" style="display: flex;">
		<div>
			<i class="fa fa-bars" style="color: white;font-size: 30px;" aria-hidden="true"></i>
		</div>
		<div style="margin-left: 10px;">
			<p style="font-size: 17pt;">Số lượng sản phẩm bán ra</p>
			<p style="font-size: 20pt;">
				<?php
				if (isset($row['soluongban'])) {
				?>
					<?php echo $row['soluongban']  ?>
				<?php
				} else {
					echo '0 ';
				}

				?>
				sản phẩm</p>
		</div>
	</div>

</div>
<hr>

<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$sql1 = "SELECT * FROM thongke WHERE thoigiantk >= CURDATE() AND thoigiantk < CURDATE() + INTERVAL 1 DAY";
$query_sql1 =  mysqli_query($mysqli, $sql1);
$row1 = mysqli_fetch_array($query_sql1);

$sql2 = "SELECT * FROM thongke WHERE MONTH(thoigiantk) = MONTH(CURDATE()) AND YEAR(thoigiantk) = YEAR(CURDATE()); ";
$query_sql2 =  mysqli_query($mysqli, $sql2);
$doanhthu = 0;
while ($row2 = mysqli_fetch_array($query_sql2)) {
	$doanhthu += $row2['doanhthu'];
}
$sql3 = "SELECT * FROM thongke WHERE YEAR(thoigiantk) = YEAR(CURDATE());";
$query_sql3 =  mysqli_query($mysqli, $sql3);
$doanhthu1 = 0;
while ($row3 = mysqli_fetch_array($query_sql3)) {
	$doanhthu1 += $row3['doanhthu'];
}
?>
<div style="height: 500px;">

	<h1><i class="fa fa-bar-chart" style="color: blue; font-size: 17pt;margin-left: 5px;" aria-hidden="true"></i>Thống kê sản phẩm theo danh mục</h1>
	<?php
	$sql4 = "SELECT d.Id_danhmuc madm,d.tendanhmuc tendm,count(s.Id_danhmuc) as countsp,min(s.giasp) mingia ,max(s.giasp) maxgia, avg(s.giasp) avggia
	FROM sanpham s left join danhmuc d on d.Id_danhmuc=s.Id_danhmuc GROUP BY d.Id_danhmuc ASC";
	$query_sql4 =  mysqli_query($mysqli, $sql4);
	?>
	<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Tên danh mục</th>
			<th>Số lượng</th>
			<th>Giá cao nhất</th>
			<th>Giá thấp nhất</th>
			<th>Giá trung bình</th>
		</tr>
		<?php

		while ($row4 = mysqli_fetch_array($query_sql4)) {

		?>
			<tr>
				<td><?php echo $row4['madm'] ?></td>
				<td><?php echo $row4['tendm'] ?></td>
				<td><?php echo $row4['countsp'] ?></td>
				<td><?php echo number_format($row4['maxgia'], 0, ',', '.') . 'vnđ' ?></td>
				<td><?php echo number_format($row4['mingia'], 0, ',', '.') . 'vnđ' ?></td>
				<td><?php echo $row4['avggia'] ?></td>
			</tr>
		<?php
		}
		?>
		<tr>
			<td colspan="6">
				<a href="?action=thongkedm&query=bieudo " style="padding: 5px;background-color: orange;color: 
			black;border-radius:5px;text-decoration:none ;font-weight: bold;">Xem biểu đồ</a>
			</td>
		</tr>
	</table>
	<hr>
	<h1><i class="fa fa-bar-chart" style="color: blue; font-size: 17pt;margin-left: 5px;" aria-hidden="true"></i>Thống kê doanh thu</h1>
	<!-- <p>Tổng doanh thu được hôm nay: <?php echo number_format($row1['doanhthu'], 0, ',', '.') . 'vnđ' ?></p>
	<p>Tổng doanh thu được tháng này: <?php echo number_format($doanhthu, 0, ',', '.') . 'vnđ' ?></p>
	<p>Tổng doanh thu được năm nay: <?php echo number_format($doanhthu1, 0, ',', '.') . 'vnđ' ?></p> -->
	<table style="width: 99%; border-collapse: collapse; margin: auto;" border="1" class="table table-striped">
		<tr>
			<td></td>
			<th>Doanh Thu </th>
		</tr>
		<tr>
			<td>Hôm nay ngày <?php echo '(' . date("d") . ')' ?></td>
			<td>
				<?php
				if (isset($row1['doanhthu'])) {
				?>
					<?php echo number_format($row1['doanhthu'], 0, ',', '.') . 'vnđ' ?>
				<?php
				} else {
					echo '0vnđ';
				}

				?>
			</td>
		</tr>
		<tr>
			<td>Tháng <?php echo '(' . date("m") . ')' ?></td>
			<td> <?php echo number_format($doanhthu, 0, ',', '.') . 'vnđ' ?></td>
		</tr>
		<tr>
			<td>Năm <?php echo '(' . date("Y") . ')' ?></td>
			<td><?php echo number_format($doanhthu1, 0, ',', '.') . 'vnđ' ?></td>
		</tr>
	</table>
</div>