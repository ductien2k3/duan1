<div class="content">
      <h2>Danh sách danh mục</h2>
      <table>
        <tr>
          <th>ID Danh Mục</th>
          <th>Tên sản phẩm</th>
          <th>Chức Năng</th>
        </tr>
        <?php
          foreach ($listdanhmuc as $dm) {
          extract($dm);
          $xoadm = "index.php?act=deletedm&id=$id";
          $suadm = "index.php?act=updatedm&id=$id";
          echo '<tr>
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td> <button class="btn-updm"><a href="'.$suadm.'"class="updatedm"> Cập Nhật</button> <button class="btn-deletedm" ><a href="'.$xoadm.'"class="deletedm"> Xoá</button> </td>
          </tr>';
      }
        ?>
        </tr>
      </table>
      
      <button class="btn-adddm"><a href="index.php?act=adddm" class="adddm">Thêm</button> 
    </div>
    
  </div>
