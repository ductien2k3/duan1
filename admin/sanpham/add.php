<div class="tieude">
    <h2>Thêm sản phẩm</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=addsp">
    <div class="chondanhmuc">
    <select name = "iddanhmuc" >
    <option value="0" selected>Vui Lòng Chọn Danh Mục</option>
        <?php
          foreach ($listdanhmuc as $dm){
            extract($dm);
            echo "<option value='$id'>$name</option>";
          }
        ?>
      </select>
	<label class="form-label">Tên sản phẩm</label>
    <input type="text" class="tendanhmuc" name="tensanpham" required placeholder="nhập vào tên">
    <label class="form-label">Giá sản phẩm</label>
    <input type="number" min="0" class="tendanhmuc" name="giasanpham" required placeholder="nhập vào giá tiền">
    <label class="form-label">Đang Giảm Giá</label>
    <input type="number" min="0" max="100" class="tendanhmuc" name="giamgia" required placeholder="nhập vào giảm giá">
    <label class="form-label">Ảnh sản phẩm</label>
    <input type="file" class="tendanhmuc" name="anhsanpham" required placeholder="nhập vào ảnh">
    <label class="form-label">Mô tả sản phẩm</label>
    <input type="text" class="tendanhmuc" name="motasanpham" required placeholder="nhập vào mô tả">
    <label class="form-label">Bảo hàng sản phẩm</label>
    <input type="text"  class="tendanhmuc" name="baohanhsanpham" required placeholder="nhập vào bảo hành">
    <label class="form-label">mã sản phẩm</label>
    <input type="text" class="tendanhmuc" name="masanpham" required placeholder="nhập vào mã sản phẩm">
    <label class="form-label">Ngày đăng sản phẩm</label>
    <input type="date" class="tendanhmuc" name="ngaydangsanpham" required placeholder="nhập vào ngày đăng ">
    <label class="form-label">Số lượng sản phẩm</label>
    <input type="number" min="0" class="tendanhmuc" name="soluongsanpham" required placeholder="nhập vào số lượng">
    <input type="submit" class="dongy" value="Thêm Sản Phẩm" name="themmoi">
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

