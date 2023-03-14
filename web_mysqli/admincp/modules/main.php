
<div id="mainContent" class="pb-3">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query= '';
        }
        if($tam == 'quanlydanhmucsanpham' &&  $query == 'lietke'){
            include("modules/quanlydanhmucsp/lietke.php");
        }else if($tam == 'quanlydanhmucsanpham' &&  $query == 'them'){
            include("modules/quanlydanhmucsp/them.php");
        }else if($tam == 'quanlydanhmucsanpham' &&  $query == 'sua'){
            include("modules/quanlydanhmucsp/sua.php");
        }
        else if($tam == 'quanlysp' &&  $query == 'lietke'){
            include("modules/quanlysp/lietke.php");
        }
        else if($tam == 'quanlysp' &&  $query == 'them'){
            include("modules/quanlysp/them.php");
        }else if($tam == 'quanlysp' &&  $query == 'sua'){
            include("modules/quanlysp/sua.php");
        }else if($tam == 'quanlydonhang' &&  $query == 'lietke'){
            include("modules/quanlydonhang/lietke.php");
        }
        else if($tam == 'quanlykhachhang' &&  $query == 'lietke'){
            include("modules/quanlykhachhang/lietke.php");
        }
        // else if($tam == 'quanlykhachhang' &&  $query == 'sua'){
        //     include("modules/quanlykhachhang/sua.php");
        // }
        else if($tam == 'donhang' &&  $query == 'xemdonhang'){
            include("modules/quanlydonhang/xemdonhang.php");
        }
        else if($tam == 'quanlykho' &&  $query == 'lietke'){
            include("modules/quanlykho/lietke.php");
        }
        else if($tam == 'quanlykho' &&  $query == 'them'){
            include("modules/quanlykho/them.php");
        }
        else if($tam == 'quanlykho' &&  $query == 'sua'){
            include("modules/quanlykho/sua.php");
        }
        else if($tam == 'thongkedm' &&  $query == 'bieudo'){
            include("modules/thongkedm.php");
        }
        else{
            include("modules/dashboard.php");
        } 
    ?>
</div>
