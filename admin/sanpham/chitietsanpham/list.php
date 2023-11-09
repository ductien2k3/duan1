<div class="content">
      <h2>Chi tiết sản phẩm</h2>
      <table>
        <tr>
          <th>Id sản phẩm</th>
          <th>Id chi tiết sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Màu sắc</th>
          <th>Kích thước</th>
          <th>Số lượng</th>
        </tr>
        <?php
          foreach ($listsanpham as $sp) {
          extract($sp);
          $xoactsp = "index.php?act=deletectsp&id=$id";
          $suactsp = "index.php?act=updatectsp&id=$id";

          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td>'.$price.'</td>
          <td>'.$giam_gia.'%</td>
          <td>'.$anhsanpham.'</td>
          <td>'.$mo_ta.'</td>
          <td>'.$bao_hanh.'</td>
          <td>'.$ma_sp.'</td>
          <td>'.$ngay_dang.'</td>
          <td>'.$so_luong.'</td>
          <td> <button class="btn-updm"><a href="'.$suactsp.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoactsp.'"class="deletedm"> Xoá</button> <button class="btn-deletedm" ><a href="'.$ctsp.'"class="deletedm"> chi tiết sản phẩm</button> </td>
          </tr>';
        }
        ?>
      

      </table>
      <button class="btn-adddm"><a href="index.php?act=addctsp" class="adddm">Thêm</button><button class="btn-adddm"><a href="index.php?act=listsp" class="adddm"> Quay lại sản phẩm</button>
    
  </div>
  </div>

