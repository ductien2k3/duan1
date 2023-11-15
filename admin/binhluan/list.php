<div class="content">
      <h2>Danh sách bình Luận</h2>
      <div class="khungtimkiemsp">
    </div>
      <table>
        <tr>
          <th>Id bình luận</th>
          <th>Nội dung</th>
          <th>Id người dùng</th>
          <th>Id sản phẩm</th>
          <th>Ngày bình luận</th>
        </tr>
        
        <?php
          foreach ($listbinhluan as $bl) {
          extract($bl);
          $xoabl = "index.php?act=deletebl&id=$id";
          $suabl = "index.php?act=updatebl&id=$id";
         
     
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$noi_dung.'</td>
          <td>'.$id_user.'</td>
          <td>'.$id_sanpham.'</td>
          <td>'.$ngay_bl.'</td>
          <td> <button class="btn-updm"><a href="'.$suabl.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoabl.'"class="deletedm"> Xoá</button>
          </tr>';
        }
        ?>
      

      </table>

  </div>
  </div>

