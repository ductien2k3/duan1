<div class="row2">
    <div class="row2 font_title">
        <br>
        <h1>Biểu đồ</h1>
    </div>
    <div class="row2 form_content">
        <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', { 'packages': ['corechart'] });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Lấy dữ liệu từ danh sách sản phẩm bán chạy top 10
                const data = google.visualization.arrayToDataTable([
                    ['Tên sản phẩm', 'Số lượng đã bán'],
                    <?php
                    foreach ($listsanphambanchay as $spbc) {
                        extract($spbc);
                        echo "['$name', $view],";
                    }
                    ?>
                ]);

                // Thiết lập các tùy chọn cho biểu đồ
                const options = {
                    title: 'Sản phẩm bán chạy top 10',
                    is3D: true,
                };

                // Vẽ biểu đồ
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
    <button class="btn-updm"><a href="index.php?act=thongke"class="updatedm">sản phẩm bán chạy</button>
    </div>
</div>
