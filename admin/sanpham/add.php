<div class="tieude">
    <h2>Thêm sản phẩm</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=adddm"> 
	<label class="form-label">Tên sản phẩm</label>
    <input type="text" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào tên">
    <label class="form-label">Giá sản phẩm</label>
    <input type="number" min="0" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào giá tiền">
    <label class="form-label">Đang Giảm Giá</label>
    <input type="number" min="0" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào giảm giá">
    <label class="form-label">Ảnh sản phẩm</label>
    <input type="file" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào ảnh">
    <label class="form-label">Mô tả sản phẩm</label>
    <input type="number" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào mô tả">
    <label class="form-label">Bảo hàng sản phẩm</label>
    <input type="text"  class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào bảo hành">
    <label class="form-label">mã sản phẩm</label>
    <input type="text" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào mã sản phẩm">
    <label class="form-label">Ngày đăng sản phẩm</label>
    <input type="date" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào ngày đăng ">
    <label class="form-label">Số lượng sản phẩm</label>
    <input type="number" min="0" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào số lượng">
    <input type="submit" class="dongy" value="Thêm Danh Mục" name="themmoi">
    <input type="reset" class="nhaplai" value="Nhập Lại">
    <button class="ratranglist"><a href="index.php?act=danhmuc">Danh Sách</button>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo $thongbao;
        }
    ?>
</form>
</div>
