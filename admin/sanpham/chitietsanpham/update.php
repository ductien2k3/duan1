<?php
    if(isset($onectsp) && is_array($onectsp) && count($onectsp) > 0){
        extract($onectsp[0]);

        $tensanpham = "";
          foreach ($listsanpham as $sp) {
          if ($sp['id'] == $id_sp) {
            $tensanpham = $sp['name'];
            break;
          }
        }
    }
?>
<div class="tieude">
    <h2>Cập Nhật chi tiết sản phẩm</h2>
    <form class="form" enctype="multipart/form-data" method="post" action="index.php?act=capnhatctsp">
        <div class="chondanhmuc">
            <!-- Hiển thị form cập nhật thông tin chi tiết sản phẩm -->
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="tendanhmuc" name="tensanpham" value="<?=$tensanpham?>" >
            <input type="hidden" class="tendanhmuc" name="id" value="<?=$id?>" >
            <label class="form-label">Màu sản phẩm</label>
            <input type="text" class="tendanhmuc" name="color" value="<?=$color?>" required placeholder="Nhập vào màu sắc">

            <label class="form-label">Kích thước</label>
            <input type="text" class="tendanhmuc" name="size" value="<?=$size ?>" required placeholder="Nhập vào kích thước">

            <label class="form-label">Số lượng</label>
            <input type="number" min="0" class="tendanhmuc" name="soluong" value="<?=$so_luong?>" required placeholder="Nhập vào số lượng">

            <input type="hidden" name="id_sp" value="<?=$sp['id'] ?>">
            <input type="submit" class="dongy" value="Cập nhật chi tiết sản phẩm" name="capnhat">
            <button class="ratranglist"><a href="index.php?act=chitietsp&id_sp=<?php echo isset($id_sp) ? $id_sp : ''; ?>">Quay lại trang chi tiết sản phẩm</a></button>
            <?php
                if(isset($thongbao) && ($thongbao!="")) {
                echo $thongbao;
                }
            ?>
        </div>
    </form>
</div>
