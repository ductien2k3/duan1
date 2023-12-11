<div class="content">
      <h2>Danh sách danh mục</h2>
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
            if ($status == 1) {
           
                $kpdm = "index.php?act=kpdm&id=$id";
                echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td> <button class="btn-updm"><a href="'.$kpdm.'"class="updatedm">Khôi Phục</button>
           
                    </tr>';
            }
          }

        ?>
        </tr>
      </table>
      
    <button class="btn-adddm"><a href="index.php?act=danhmuc" class="adddm">Quay Lại</button> 
    </div>
    
  </div>
