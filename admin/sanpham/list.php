<div class="content">
      <h2>Danh sách sản phẩm</h2>
      <div class="khungtimkiemsp">
      <form action="index.php?act=listsp" method="POST">
        <input type="text" name="kyw">
        <select name = "iddanhmuc" class="">
          <option value="0" selected>Tất cả</option>
          <?php
          
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo "<option value='$id'>$name</option>";

              }
              ?>
          
        </select>
        <input type="submit" value="Tìm Kiếm" name ="listspok">
      </form>
    </div>
      <table>
        <tr>
          <th>Tên Danh Mục</th>
          <th>Id sản phẩm</th>
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
        
        <?php
          foreach ($listsanpham as $sp) {
          extract($sp);
          $xoasp = "index.php?act=deletesp&id=$id";
          $suasp = "index.php?act=updatesp&id=$id";
          $ctsp = "index.php?act=chitietsp&id=$id";
          $hinhpath = "../upload/".$image;
          if(is_file($hinhpath)){
            $anhsanpham = "<img src='$hinhpath' width='50px'>";
          } else {
            $anhsanpham = "no image";
          }

          $categoryName = '';
          foreach ($listdanhmuc as $danhmuc) {
          if ($danhmuc['id'] == $id_danhmuc) {
            $categoryName = $danhmuc['name'];
            break;
          }
          }

          echo '<tr>
          <td>'.$categoryName.'</td>
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
          <td> <button class="btn-updm"><a href="'.$suasp.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoasp.'"class="deletedm"> Xoá</button> <button class="btn-deletedm" ><a href="'.$ctsp.'"class="deletedm"> chi tiết sản phẩm</button> </td>
          </tr>';
        }
        ?>
      

      </table>
      <button class="btn-adddm"><a href="index.php?act=addsp" class="adddm">Thêm</button>
    
  </div>
  </div>

