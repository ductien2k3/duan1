<div class="content">
      <h2>Danh sách sản phẩm</h2>   
      <table>
        <tr>
          <th>ID Danh Mục</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Đang Giảm Giá</th>
          <th>Ảnh</th>
          <th>Mô Tả</th>
          <th>Bảo Hành</th>
          <th>Mã Sản Phẩm</th>
          <th>Ngày Đăng</th>
          <th>Số Lượng</th>
          <th>Chức Năng</th>
        </tr>
        
        <!-- <?php
          foreach ($listsanpham as $sp) {
          extract($sp);
          $xoasp = "index.php?act=deletesp&id=$id";
          $suasp = "index.php?act=updatesp&id=$id";
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td>'.$price.'</td>
          <td>'.$giam_gia.'</td>
          <td>'.$image.'</td>
          <td>'.$mo_ta.'</td>
          <td>'.$bao_hanh.'</td>
          <td>'.$ma_sp.'</td>
          <td>'.$ngay_dang.'</td>
          <td>'.$so_luong.'</td>
          <td> <button class="btn-updm"><a href="'.$suasp.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoasp.'"class="deletedm"> Xoá</button> </td>
          </tr>';
        }
        ?> -->
      

      </table>
      <button class="btn-adddm"><a href="index.php?act=addsp" class="adddm">Thêm</button>
    </div>
  </div>

