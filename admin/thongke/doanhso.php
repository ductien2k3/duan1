<div class="content">
    <div class="khungtimkiemsp">
    <form action="index.php?act=doanhso" method="POST">
      
    <select name="ngayFilter" class="">
        <option value="0" selected>Tất cả</option>
        <?php
        foreach ($bolocngay as $ng) {
            extract($ng);
            echo "<option value='$ngay_dat'>$ngay_dat</option>";
        }
        ?>
    </select>
    <input type="submit" value="Lọc" name="doanhsofilter">
</form>

    </div>
    <h2>Doanh số</h2>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng đã bán</th>
            <th>Doanh số</th>
            <th>Tổng giá trị đơn hàng</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đơn hàng</th>
        </tr>
        <?php 
        foreach ($loadoanhso as $ds){
            $doanhso = $ds['gia_san_pham'] * $ds['soluong'];
            echo '<tr>
                <td>'.$ds['ten_san_pham'].'</td>       
                <td>'.$ds['soluong'].'</td>
                <td>'.$doanhso.'</td>
                <td>'.$ds['tongdonhang'].'</td>
                <td>'.$ds['ma_don_hang'].'</td>
                <td>'.$ds['ngay_dat'].'</td>
                </tr>';
        }
        ?>
    </table>
</div>
