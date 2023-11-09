<div class="content">
      <h2>Danh sách tài khoản</h2>
      <div class="khungtimkiemsp">
      <form action="index.php?act=dstk" method="POST">
        <input type="text" name="kyw">
        <input type="submit" value="Tìm Kiếm" name ="listtkok">
      </form>
    </div>
      <table>
        <tr>
            <th>Mã Tài Khoản</th>
            <th>Tên Đăng Nhập</th>
            <th>Mật Khẩu</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Avatar</th>
            <th>Vai Trò</th>
            <th>Chức Năng</th>
        </tr>

        <?php
          foreach ($listtaikhoan as $tk) {
          extract($tk);
          $xoatk = "index.php?act=deletetk&id=$id";
          $suatk = "index.php?act=updatetk&id=$id";
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$user_name.'</td>
          <td>'.$pass_word.'</td>
          <td>'.$email.'</td>
          <td>'.$tel.'</td>
          <td>'.$address.'</td>
          <td>'.$avatar.'</td>
          <td>'.$chuc_nang.'</td>
          <td> <button class="btn-updm"><a href="'.$suatk.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoatk.'"class="deletedm"> Xoá</button> </td>
          </tr>';
        }
        ?>
      </table>
      <button class="btn-adddm"><a href="index.php?act=addtk" class="adddm">Thêm</button>
    
  </div>
  </div>

