
<div class="tieude">
    <h2>Thêm danh mục</h2>
<form class="form" enctype="multipart/form-data" method="post" action="index.php?act=adddm"> 
	<label class="form-label">Tên Danh Mục</label>
    <input type="text" class="tendanhmuc" name="tendanhmuc" required placeholder="nhập vào tên">
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
