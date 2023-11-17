<div class="content">
      <h2>Chi tiết sản phẩm</h2>
      <table>
        <tr>
          <th>Id chi tiết sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Màu sắc</th>
          <th>Kích thước</th>
          <th>Số lượng</th>
        </tr>
        <?php
          foreach ($listctsp as $ctsp) {
          extract($ctsp);
          $xoactsp = "index.php?act=xoactsp&id=$id";
          $suactsp = "index.php?act=updatectsp&id=$id";
        
          $tensanpham = "";
          foreach ($listsanpham as $sp) {
          if ($sp['id'] == $id_sp) {
            $tensanpham = $sp['name'];
            break;
          }
        }
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$tensanpham.'</td>
          <td>'.$color.'</td>
          <td>'.$size.'</td>
          <td>'.$so_luong.'</td>
          <td> <button class="btn-updm"><a href="'.$suactsp.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm">
          <a href="'.$xoactsp.'" class="deletedm">Xoá</a> </button>
        </td>
          </tr>';
        }
        ?>
      </table>
      <button class="btn-adddm"><a href="index.php?act=addctsp&id=<?=$id_sp?>" class="adddm">Thêm</button> <button class="btn-adddm"><a href="index.php?act=listsp" class="adddm"> Quay lại sản phẩm</button>

  </div>
  </div>

