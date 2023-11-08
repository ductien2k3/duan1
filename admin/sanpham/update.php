<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath = "../upload/".$image;
        if(is_file($hinhpath)){
            $image = "<img src='$hinhpath' width='50px'>";
        } else {
            $image = "no image";
          }
?>
<div class="tieude">
    <h2>Cập nhật sản phẩm</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=capnhatsp">
    <div class="chondanhmuc">
    <select name = "iddanhmuc" >
    <option value="0" selected>Vui Lòng Chọn Danh Mục</option>
        <?php
          foreach ($listdanhmuc as $dm){
            extract($dm);
            if($id_danhmuc == $id){
                echo "<option value='$id' selected> $name </option>";
                }else{
                echo "<option value='".$id."'> $name </option>";
            }
        }      
        ?>
      </select>
	<label class="form-label">Tên sản phẩm</label>
    <input type="text" class="tendanhmuc" name="tensanpham" required placeholder="nhập vào tên" value="<?=$sp['name'] ?>">
    <label class="form-label">Giá sản phẩm</label>
    <input type="number" min="0" class="tendanhmuc" name="giasanpham" required placeholder="nhập vào giá tiền" value="<?=$price ?>">
    <label class="form-label">Đang Giảm Giá</label>
    <input type="number" min="0" class="tendanhmuc" name="giamgia" required placeholder="nhập vào giảm giá" value="<?=$giam_gia ?>">
    <label class="form-label">Ảnh sản phẩm</label>
    <input type="file" class="tendanhmuc" name="anhsanpham" placeholder="nhập vào ảnh"><?=$image ?>
    <label class="form-label">Mô tả sản phẩm</label>
    <input type="text" class="tendanhmuc" name="motasanpham" required placeholder="nhập vào mô tả" value="<?=$mo_ta ?>">
    <label class="form-label">Bảo hàng sản phẩm</label>
    <input type="text"  class="tendanhmuc" name="baohanhsanpham" required placeholder="nhập vào bảo hành" value="<?=$bao_hanh ?>">
    <label class="form-label">mã sản phẩm</label>
    <input type="text" class="tendanhmuc" name="masanpham" required placeholder="nhập vào mã sản phẩm" value="<?=$ma_sp ?>">
    <label class="form-label">Ngày đăng sản phẩm</label>
    <input type="date" class="tendanhmuc" name="ngaydangsanpham" required placeholder="nhập vào ngày đăng " value="<?=$ngay_dang ?>">
    <label class="form-label">Số lượng sản phẩm</label>
    <input type="number" min="0" class="tendanhmuc" name="soluongsanpham" required placeholder="nhập vào số lượng" value="<?=$so_luong ?>">
    <input type="hidden" name="idsanpham" value="<?=$sp['id'] ?>">
    <input type="submit" class="dongy" value="Cập Nhật" name="capnhat">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=listsp">Danh Sách</button>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
</div>    
</form>
</div>

