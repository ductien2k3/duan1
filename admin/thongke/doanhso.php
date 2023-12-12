<div class="content">
    <h2>Doanh số</h2>
    <div class="khungtimkiemsp">
    <form action="index.php?act=doanhso" method="POST">
    <input type="date" name="ngay" value="<?php echo $ngay; ?>" required>

    <input type="submit" value="Lọc" name="locngay">
    </form>

    </div>
    
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
