<div class="content">
      <h2>Danh sách danh mục đã xoá</h2>
      <table>
        <tr>
          <th>ID Voucher</th>
          <th>Mã Giả giá</th>
          <th>Khuyến mại</th>
          <th>Ngày Bắt Đầu</th>
        </tr>
        <?php
          // Thay đổi trong vòng lặp foreach để chỉ hiển thị các danh mục chưa bị xoá
          foreach ($listvoucher as $vc) {
            extract($vc);
                echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$ma_voucher.'</td>
                    <td>'.$khuyen_mai.'</td>
                    <td>'.$ngay_bd.'</td>
                    </tr>';
            }
          

        ?>
        </tr>
      </table>
      
      <button class="btn-adddm"><a href="index.php?act=addvc" class="adddm">Thêm</button>
    </div>
    
  </div>
