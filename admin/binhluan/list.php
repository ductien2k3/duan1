<div class="content">
      <h2>Danh sách bình Luận</h2>
      <div class="khungtimkiemsp">
    </div>
      <table>
        <tr>
          <th>Id bình luận</th>
          <th>Nội dung</th>
          <th>Id người dùng</th>
          <th>Tên sản phẩm</th>
          <th>Ngày bình luận</th>
        </tr>
        
        <?php
          foreach ($listbinhluan as $bl) {
          extract($bl);
          $xoabl = "index.php?act=deletebl&id=$id";
          $suabl = "index.php?act=updatebl&id=$id";

          foreach ($listsanpham as $sp) {
            if ($sp['id'] == $id_sanpham) {
              $tensanpham = $sp['name'];
              break;
            }
          }

          foreach ($listtaikhoan as $tk) {
            if ($tk['id'] == $id_user) {
              $tennguoidung= $tk['user_name'];
              break;
            }
          }
     
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$noi_dung.'</td>
          <td>'.$tennguoidung.'</td>
          <td>'.$tensanpham.'</td>
          <td>'.$ngay_bl.'</td>
          <td> <button class="btn-updm"><a href="'.$suabl.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoabl.'"class="deletedm"> Xoá</button>
          </tr>';
        }
        ?>
      

      </table>

  </div>
  </div>

