
    <div class="content">
      <h2>Đơn Hàng</h2>
      <table>
        <tr>
            <th>ID</th>
          <th>Mã Đơn hàng</th>
          <th>ID_User</th>
          <th>Tên người đặt</th>
          <th>Tổng đơn hàng</th>
          <th>Địa chỉ</th>
          <th>Số Điện Thoại</th>
          <th>Ngày Đặt</th>
          <th>Trạng Thái</th>
          <th>sản phẩm</th>
          <th>Cập Nhật</th>
        </tr>
        <?php
            // $xoadh = "index.php?act=delete&id=$id";
            // $suadh = "index.php?act=update&id=$id";

            //<td> <button class="btn-updm"><a href="'.$suadh.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoadh.'"class="deletedm"> Xoá</button> </td>
            foreach ($listnguoimua as $nm) {
                extract($nm);
                $chitietdonhang = "index.php?act=chitietdonhang&id_dathang=$id";
                $suagh = "index.php?act=updategh&id=$id";
                $xoadh = "index.php?act=deletegh&id=$id";             
                echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$madh.'</td>
                        <td>'.$id_user.'</td>
                        <td>'.$name.'</td>                  
                        <td>'.$tongdonhang.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$ngay_dat.'</td>
                        <td>'.$status.'</td>
                        <td> <button class="btn-updm"><a href="'.$chitietdonhang.'"class="updatedm">sản phẩm</button> <button class="btn-deletedm" ><a href="'.$xoadh.'"class="deletedm"> Xoá </button></td>
                        <td> <button class="btn-updm"><a href="'.$suagh.'"class="updatedm">Cập nhật trạng thái</button></td>
                        </tr>';
            }
        ?>
        
        
      </table>
    </div>

