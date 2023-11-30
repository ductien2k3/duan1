<div class="content">
      <h2>Doanh số</h2>
      <table>
        <tr>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng đã bán</th>
          <th>Doanh số</th>
          <th>Tổng giá trị đơn hàng</th>
          <th>Mã đơn hàng</th>
        </tr>
        <?php 
        foreach ($loadoanhso as $ds){
        $doanhso = $ds['gia_san_pham'] * $ds['soluong'];
            echo '<tr>
                <td>'.$ds['ten_san_pham'].'</td>
                <td>'.$ds['gia_san_pham'].'</td>
                <td>'.$ds['soluong'].'</td>
                <td>'.$doanhso.'</td>
                <td>'.$ds['tongdonhang'].'</td>
                <td>'.$ds['ma_don_hang'].'</td>
                </tr>';
        }
        ?>
      </table>
    </div>