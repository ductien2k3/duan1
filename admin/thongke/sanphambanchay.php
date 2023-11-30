<div class="content">
    <h2>Sản phẩm bán chạy top 10</h2>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng tồn kho</th>
            <th>Số lượng đã bán</th>
            
        </tr>
        <?php
        foreach ($listsanphambanchay as $spbc) {
            extract($spbc);
            echo '<tr>
                    <td>' . $name . '</td>
                    <td>' . $price . '</td>
                    <td>' . $so_luong . '</td>
                    <td>' . $view . '</td>
                </tr>';
        }
        ?>
    </table>
    <br>
    <button class="btn-updm"><a href="index.php?act=bieudobanchay"class="updatedm">Biểu đồ sản phẩm bán chạy</button> <button class="btn-updm"><a href="index.php?act=doanhso"class="updatedm">Doanh số</button>
</div>
