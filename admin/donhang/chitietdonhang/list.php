
<div class="content">
      <h2>Chi Tiết Đơn Hàng</h2>
      <table>
        <tr>
            <th>ID</th>
          <th>ID_Đặt Hàng</th>
          <th>ID_Sản Phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
        </tr>
        <?php
            foreach ($listctgh as $ctgh){
                extract($ctgh);
                echo ' <tr>
                <td>'.$id.'</td>
                <td>'.$id_dathang.'</td>
                <td>'.$id_sanpham.'</td>
                <td>'.$tensanpham.'</td>
                <td>'.$gia.'</td>
                <td>'.$soluong.'</td>             
                </tr>';
            }
        ?>    
      </table>
      <button class="btn-adddm"><a href="index.php?act=donhang" class="adddm"> Quay lại đơn hàng </button>
    </div>

