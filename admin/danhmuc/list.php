<div class="content">
      <h2>Danh sách danh mục đã xoá</h2>
      <table>
        <tr>
          <th>ID Danh Mục</th>
          <th>Tên sản phẩm</th>
          <th>Chức Năng</th>
        </tr>
        <?php
          // Thay đổi trong vòng lặp foreach để chỉ hiển thị các danh mục chưa bị xoá
          foreach ($listdanhmuc as $dm) {
            extract($dm);
            if ($status == 0) {
                $xoadm = "index.php?act=deletedm&id=$id";
                $suadm = "index.php?act=updatedm&id=$id";
                echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td> <button class="btn-updm"><a href="'.$suadm.'"class="updatedm"> Cập Nhật</button>
                        <button class="btn-deletedm" ><a href="'.$xoadm.'"class="deletedm"> Xoá</button> </td>
                    </tr>';
            }
          }

        ?>
        </tr>
      </table>
      
      <button class="btn-adddm"><a href="index.php?act=adddm" class="adddm">Thêm</button> <button class="btn-adddm"><a href="index.php?act=dmdx" class="adddm">Danh Mục Đã Xoá</button> 
    </div>
    
  </div>
