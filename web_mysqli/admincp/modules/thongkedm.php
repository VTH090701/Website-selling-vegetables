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
$sql4 = "SELECT d.Id_danhmuc madm,d.tendanhmuc tendm,count(s.Id_danhmuc) as countsp,min(s.giasp) mingia ,max(s.giasp) maxgia, avg(s.giasp) avggia
FROM sanpham s left join danhmuc d on d.Id_danhmuc=s.Id_danhmuc GROUP BY d.Id_danhmuc ASC";
$query_sql4 =  mysqli_query($mysqli, $sql4);
// $row4 = mysqli_fetch_array($query_sql4);
?>
<script src="https://www.gstatic.com/charts/loader.js"></script>

<p class="tieude1">Biểu đồ</p><br>
<div id="myChart" style="width:100%; max-width:640px; height:370px;margin: auto;">
</div>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $count = mysqli_num_rows($query_sql4);
            $i = 1;
            while ($row4 = mysqli_fetch_array($query_sql4)) {
                if ($i == $count) $dauphay = "";
                else $dauphay = ",";
                echo  "['" . $row4['tendm'] . "', " . $row4['countsp'] . "]".$dauphay;
                $i += 1;
            }
            ?>
        ]);

        var options = {
            title: 'Thống kê sản phẩm theo danh mục',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>