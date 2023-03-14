<?php
    include('../../config/config.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now2= date("Y-m-d H:m:s");
    if(isset($_GET['code'])){
        $madh = $_GET['code'];
        $sql_update = "UPDATE donhang set tinhtrangdh=0 where madonhang='".$madh."' ";
        $query = mysqli_query($mysqli,$sql_update);
        
        
        //thống kê doanh thu
        $sql_lietke_dh = "SELECT * FROM chitietdonhang,sanpham WHERE chitietdonhang.Id_sanpham=sanpham.Id_sanpham AND chitietdonhang.madonhang='$madh' ORDER BY chitietdonhang.Id_chitietdonhang DESC";
        $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
        

        $soluongmua = 0;
        $doanhthu = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
            $thanhtien = $row['giasp'] * $row['soluongmua'];  
            $doanhthu+=$thanhtien;
            $soluongmua+=$row['soluongmua'];
        }   

        
        $sql_thongke = "SELECT * FROM thongke WHERE  DAY(thoigiantk) = DAY(CURDATE()) AND MONTH(thoigiantk) = MONTH(CURDATE()) AND YEAR(thoigiantk) = YEAR(CURDATE())"; 
        $query_thongke = mysqli_query($mysqli,$sql_thongke);
        if(mysqli_num_rows($query_thongke)==0){
            $soluongban = $soluongmua;
            $doanhthu = $doanhthu;
            $sldonhang = 1;
            $sql_update_thongke = mysqli_query($mysqli,"INSERT INTO thongke (madonhang,thoigiantk,soluongban,doanhthu,sldonhang) VALUE('$madh','$now2','$soluongban','$doanhthu','$sldonhang')" );
        }elseif(mysqli_num_rows($query_thongke)!=0)
        {
            while($row_tk = mysqli_fetch_array($query_thongke))
            {
                $soluongban = $soluongmua;
                $soluongban = $row_tk['soluongban']+$soluongban;
                $doanhthu = $row_tk['doanhthu']+$doanhthu;
                $sldonhang = $row_tk['sldonhang']+1;
                $sql_update_thongke = mysqli_query($mysqli,"UPDATE thongke SET madonhang='$madh',soluongban='$soluongban',doanhthu='$doanhthu',sldonhang='$sldonhang' WHERE  day(thoigiantk) = day(CURDATE());");
            }
        }

        header('Location:../../index.php?action=quanlydonhang&query=lietke'); 
    }
?>